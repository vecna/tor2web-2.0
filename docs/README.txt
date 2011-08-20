This directory contains the text required by tor2web implementation.

Tor2web, beside be an easy way to obtain contents from an hidden service exposing HTTP/HTTPS,
need to be an ADVOCACY PROJECT.

in facts, an user that is using tor2web need to know:

A) tor2web server mantainer are NOT RESPONSABLE about the served contents
B) tor2web provide a partial anonymity, because for a passive attacker is easy
   to understand that you're using some kind of anonymous resource, and at the
   moment is not fixed a DNS issue that could bring the user to make some kind
   of leakage {solution has already be tested but not yet stabilized}
C) a better usage of Tor network will be obtain using the official tor client
D) every user that is using a tor2web proxy need to know and accept the previous
   terms.

for these reasons, exists the following documentation:

1) disclaimer.html
    the text used at the start of every joining: an used need to understound and
    accept points A, B, C and D

2) iframe.html
    an iframe injected need to remind point A and C, and link to the segnalation
    form

3) report-a-site.html
    maybe a content result ethically, lawfully or personally not acceptable from
    an user using tor2web, with this form, should segnalate to the node mantainer 
    the issue
   
4) tor2web.css 
    the inejcted iframe contains the separation from the page template, we could
    not know in which kind of page should be injected, for this reason the
    separator use a weird and disgusting combination of colors :)

    other tor2web injection require a bit of graphical supports, all the classes
    are implemented in that .css

5) tor2web-small.png & tor2web-large.png
    the two images containinig tor2web logos

