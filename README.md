In order to make a new, scalable and improved version 
of tor2web we are testing Glype PHP proxy.

We are integrating it transparently within Apache Rewrite 
rules and DNS Wildcards, with final goal to create a 
backward-compatible tor2web system based ona PHP Proxy. 

/proxyg7n6l6m302
Contains the actual web proxy and should go in the root of the
web directory

/apache
contains the apache mod_rewrite configuration to make glype proxy
backward compatible with old tor2web

/privoxy
contains the privoxy configuration to use in conjunction with tor

