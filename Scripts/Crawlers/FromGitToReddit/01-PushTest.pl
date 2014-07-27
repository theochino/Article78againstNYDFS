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

my $response_body;
my $response_body2;
my $curl = WWW::Curl::Easy->new;

my $TimeScriptRunning;

# Part #1
my $host = 'REDDITURL';
$curl->setopt(CURLOPT_HEADER,0);
$curl->setopt(CURLOPT_URL, $host);
$curl->setopt(CURLOPT_WRITEDATA,\$response_body);
my $retcode = $curl->perform;
my $response = decode_json ($response_body);


print Dumper ($response);

#$response2->{'round_duration'} )

exit();

