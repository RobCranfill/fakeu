fakeu
====

A simple implementation of a web interface to heyu, the X10 controller.


Motivation
====
I have a Linux box (a Raspberry Pi, actually) running 'heyu', which automatically
controls some of the lights in my house. (See XXX, YYY, ZZZ). I would sometimes
like to override that - to turn a light on or off immediately. There are solutions
for that, such as domus.Link (TODO: link), but I thought I'd have some fun and make my own
solution. (Besides, I couldn't entirely get domus.Link to work.)

So I created a simple PHP page that presents a very simple - but pretty! - GUI (using
JavaScript buttons from (TODO: link), JQuery (TODO: link), and AJAX.

Ultimately, the heyu command is issued by PHP, which, being a server-side things,
cannot be directly invoked by HTML or JavaScript; hence the use of AJAX.

But take a look at the files - it's really pretty simple. (I had attempted
a pure-PHP solution for a while, but it was horrendous. And non-functional.)

Anyway, enjoy! Feel free to re-use, to ask me questions, etc.

 /rob
