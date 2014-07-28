#!/usr/bin/perl

my @FILES = <*:*.html>;

foreach my $file (@FILES) {


        my $ANY = 0;
        my @BUFFER;
        print "\n\n::: $file\n";
        open my $fi, "<", $file;
        while (<$fi>) {
                chomp;
                if (/\<\/pre/i) { $open = 0; }
                next if /\<h2\>Banking ?\<\/h2\>/i;
                print $_ . "\n" if $open;
                push(@BUFFER, $_);
                if (/\<pre/i) { $open = 1; $ANY = 1; }
        }
        close $fi;
        print join("\n", @BUFFER) if $ANY == 0;
}
