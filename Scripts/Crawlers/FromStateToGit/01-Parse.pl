#!/usr/bin/perl

#<br><a href=javascript:getlaw("LAWS","$$BNK9-P$$@TXBNK09-P","LAW")> 9-P</a> - Acceptance of certain checks for deposit.


sub getlaw {
        my ($CGI, $QDATA, $LIST, $SECTION, $TITLE) = @_;
        $SECTION =~ s/^(\s|\t)//g;
        $SECTION =~ s/(\s|\t)$//g;
        $SECTION =~ s/ /_/g;
        $TITLE =~ s/^(\s|\t)//g;
        $TITLE =~ s/(\s|\t)$//g;
        my $FILENAME = lc($TITLE);
        $FILENAME =~ s/ /_/g;
        $FILENAME =~ s/[^a-z0-9_]//g;
        $FILENAME = lc("${SECTION}:${FILENAME}.html");
#       print "CGI:$CGI QDATA:$QDATA LIST:$LIST SECTION:$SECTION TITLE:$TITLE FILE:$FILENAME\n";
        return if -f "${FILENAME}";
        print "wget -O ${FILENAME} \'http://public.leginfo.state.ny.us/LAWSSEAF.cgi?QUERYTYPE=${CGI}+&QUERYDATA=${QDATA}+&LIST=${CGI}+&BROWSER=BROWSER&TOKEN=50711398+&TARGET=VIEW\'\n";


}


while (<>) {
        chomp;
        s/\r//g;
        next unless /javascript/;
        if (/getlaw\("([^\"]+)","([^\"]+)","([^\"]+)"\)\>([^\<]+).* - ([^\$]+)/) {
                my ($CGI, $QDATA, $LIST, $SECTION, $TITLE) = ($1, $2, $3, $4, $5);
                getlaw($CGI, $QDATA, $LIST, $SECTION, $TITLE);
        }
}

