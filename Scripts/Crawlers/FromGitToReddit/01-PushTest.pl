#!/usr/bin/perl

### This will spagethi code to Parse the Text and put it 
### on the REDDIT website.

### Versioning History Provided by GitHub.
### https://github.com/theochino/Article78againstNYDFS/tree/master/Scripts/Crawlers/FromGitToReddit

use strict;
use warnings;
use utf8;

#use REST::Client;
use DBI;
use JSON;
use MIME::Base64;
use Data::Dumper;
use WWW::Curl::Easy;
use Reddit::Client;

my $DEBUG = 1;

my $session_file = 'RedditSessionFile';
my $reddit       = Reddit::Client->new(session_file => $session_file, user_agent => "Custom Perl Script");

unless ($reddit->is_logged_in) {
	print "I am here in the login\n";
	$reddit->login('theochino', 'It0ne2k1');
	print "Is is here that I die?\n";
	$reddit->save_session();
}

$reddit->submit_text(
	subreddit => 'NYSBankingLaws',
	title     => 'Testing with the perl script',
	text      => 'This is a test of the post inside Reddit'
);


#my $links = $reddit->fetch_links(subreddit => '/r/NYSBankingLaws', limit => 2);
#foreach (@{$links->{items}}) {
#	print Dumper ($_);
#}


#$response2->{'round_duration'} )

exit();

