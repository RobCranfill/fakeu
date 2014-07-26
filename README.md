fakeu
====
A simple implementation of a web interface to heyu, the X10 controller.


Motivation
====
I have a Linux box (a 
<a href='http://www.raspberrypi.org/' target='_blank'>Raspberry Pi</a>, actually) running
<a href='http://heyu.tanj.com/' target='_blank'>heyu</a>, 
which automatically controls some of the lights in my house. 
I would sometimes like to override that - to turn a light on or off immediately. 
There are solutions for that, such as 
<a href='http://domus.link.co.pt/' target='_blank'>domus.Link</a>, 
but I thought I'd have some fun and make my own solution. 
(Besides, I couldn't entirely get domus.Link to work.)


Operation
====
I created a simple PHP page that presents a very simple - but pretty! - GUI (using
JavaScript buttons from <a href='https://plus.google.com/u/0/114294210195147580398?rel=author' target='_blank'>Saran Chamling</a> 
at <a href='http://www.sanwebe.com/2013/01/40-css-buttons-from-codepen' target='_blank'>Codepen</a>, 
<a href='http://jquery.com/' target='_blank'>JQuery</a>, 
and <a href='http://api.jquery.com/jquery.ajax/' target='_blank'>AJAX</a>.

Ultimately, the heyu command is issued by PHP, which, being a server-side thing,
cannot be directly invoked by HTML or JavaScript; hence the use of AJAX.

But take a look at the files - it's really pretty simple. (I had attempted
a pure-PHP solution for a while, but it was horrendous. And non-functional.)

Anyway, enjoy! Feel free to re-use, to ask me questions, etc.

 /rob
