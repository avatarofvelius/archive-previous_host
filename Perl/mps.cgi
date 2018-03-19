 #!/usr/bin/perl\par
 use Socket;

 my $handler = 'splay';

 my $url = shift @ARGV;
 $url=~m/http\\:\\/\\/([^\\:^\\/]*)(?:\\:(\\d+))?\\/(.*)/;
 my $host = $1;
 my $port = $2;
 $port = 80 unless($port);
 my $file = '/'.$3;

 my $proto = getprotobyname('tcp');
 socket(SOCK, PF_INET, SOCK_STREAM, $proto);
 print "Looking up $host..\\n";
 my $sin = sockaddr_in($port, inet_aton($host));
 print "Connecting to $host:$port..\\n";
 connect(SOCK, $sin) || die "Connect failed: $!\\n";

 my $old_fh = select(SOCK);
 $|=1;
 select($old_fh);

 print "Requesting $file..\\n";
 print SOCK "GET $file HTTP/1.0\\n";
 print SOCK "Accept: */*\\n";
 print SOCK "User-Agent: webamp $version\\n\\n";
 print "Waiting for reply..\\n";
 my $header = <SOCK>;
 print "$header\\n";
 exit unless($header=~m/200|OK/);

 while($header = <SOCK>) {
        chomp;
        last unless(m/\\S/);
 }

 my $content; 
 open(HANDLER, "|$handler") or die "Cannot pipe input to $handler: $!\\n";
 print "Redirecting HTTP filestream to $handler..\\n";
 while(read(SOCK, $content, 512))
{
         print HANDLER $content;
}
 close SOCK;



 