fakeu
====

A simple implementation of a web interface to heyu, the X10 controller.


Motivation
====
I have a Linux box (a Raspberry Pi, actually) running [heyu](http://heyu.tanj.com/), 
which automatically controls some of the lights in my house. 
I would sometimes like to override that - to turn a light on or off immediately. 
There are solutions for that, such as [domus.Link](http://domus.link.co.pt/), 
but I thought I'd have some fun and make my own solution. 
(Besides, I couldn't entirely get domus.Link to work.)

So I created a simple PHP page that presents a very simple - but pretty! - GUI (using
JavaScript buttons from 
[Saran Chamling](https://plus.google.com/u/0/114294210195147580398?rel=author)
at [Codepen](http://www.sanwebe.com/2013/01/40-css-buttons-from-codepen), 
[JQuery](http://jquery.com/), 
and [AJAX](http://api.jquery.com/jquery.ajax/).

Ultimately, the heyu command is issued by PHP, which, being a server-side things,
cannot be directly invoked by HTML or JavaScript; hence the use of AJAX.

But take a look at the files - it's really pretty simple. (I had attempted
a pure-PHP solution for a while, but it was horrendous. And non-functional.)

Anyway, enjoy! Feel free to re-use, to ask me questions, etc.

 /rob
