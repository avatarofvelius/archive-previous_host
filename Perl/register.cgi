#!/usr/bin/perl -w
use strict;
use CGI;
use Email::Valid;

my $query    = new CGI;

my $sendmail   = "/usr/sbin/sendmail -t";
my $reply_to   = "Reply-to: foo\@getenjoyment.net\n";
my $subject    = "Subject: Confirmation of your Registration\n";
my $content    = "Thanks for registering. (not really just testing the script :D)";
my $to         = $query->param('send_to')."\n";
my $user_name  = $query->param('user_name')."\n";
my $user_pass  = $query->param('user_pass')."\n";
my $user_first = $query->param('user_first')."\n";
my $user_last  = $query->param('user_last')."\n";

unless (Email::Valid->address($query->param('send_to'))) {
  print $query->header;
  print "You supplied an invalid email address.";
  exit;
}

my $send_to  = "To: ".$query->param('send_to');

open(SENDMAIL, "|$sendmail") or die "Cannot open $sendmail: $!";
print SENDMAIL $reply_to;
print SENDMAIL $subject;
print SENDMAIL $send_to;
print SENDMAIL "Content-type: text/plain\n\n";
print SENDMAIL $content;
close(SENDMAIL);

print $query->header;
print "Confirmation of your Registration will be emailed to you.";

print $user_name;
print $user_pass;
print $user_first;
print $user_last;