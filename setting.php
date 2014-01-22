<?php

class Setting {

public $username = "";
public $password = "";
public $directory = "HECT/";
public $repeat = 50;
public $number = 0;
public $debug = true;
public $timezone = 'GB';
public $passresults = "resultspass.csv";
public $tests;
   function  __construct(){
        $this->tests = array(
                array('name' => 'Whois', 'url' => "https://ipv6.he.net/certification/daily.php?test=whois",'htmloutput' => 'whois.html', 'rawoutput' => 'whoisraw.txt','textareaname' => 'input','command' => "whois -h whois.ripe.net {ip}",'lastdone' => "" ),
                array('name' => 'Ping', 'url' => "https://ipv6.he.net/certification/daily.php?test=ping",'htmloutput' => 'ping.html', 'rawoutput' => 'pingraw.txt' ,'textareaname' => 'input','command' => "ping6 -c 3 {ip}",'lastdone' => "" ),
                array('name' => 'dig PTR', 'url' => "https://ipv6.he.net/certification/daily.php?test=ptr",'htmloutput' => 'dig2.html', 'rawoutput' => 'dig2raw.txt' ,'textareaname' => 'input','command' => "dig -x {ip}",'lastdone' => ""  ),
                array('name' => 'dig AAAA', 'url' => "https://ipv6.he.net/certification/daily.php?test=aaaa",'htmloutput' => 'dig.html', 'rawoutput' => 'digraw.txt','textareaname' => 'input' ,'command' => "dig AAAA {host}" ,'lastdone' => "" ),
                array('name' => 'Traceroute', 'url' => "https://ipv6.he.net/certification/daily.php?test=traceroute",'htmloutput' => 'tracert.html', 'rawoutput' => 'traceraw.txt' ,'textareaname' => 'input','command' =>  "traceroute6 -I {ip} 2>&1" ,'lastdone' => "" )
                );


    }


}



?>
