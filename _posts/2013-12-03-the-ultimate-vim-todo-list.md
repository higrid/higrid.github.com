---
layout: post
title: The Ultimate VIM TODO List
category: [hicms]
tags: [content, design]
keywords: FTP
description: 
_layout: english
_template: _english_post
---


With a **TODO list** of over 500 items I clearly need advanced software to manage my tasks. And finally I have found just the tool for the job...

After trying web based project trackers, spreadsheets, desktop project management apps, calendar based, email-based, smartphone apps and everything else I could think of, it looks like I'll be sticking with my **plain text todo&#160;file** with a couple of handy VIM scripts.

Here's how it works.

My todo.txt is just a **tab-separated** text file that looks something like this:

<pre>
1	8	roger	tax return
1	12	seo	keyword tools
1	20	web	single domain login access
2	1	blog	ultimate VIM TODO list
2	2	web	settings page broken
2	2	cms	http://en.wikipedia.org/wiki/Website_builder
3	3	blog	glassfish-vs-tomcat-update.txt
3	5	blog	enums in jsf</pre>
The first column is **priority** and the second is a **time estimate** in hours. I sort by priority then time by using the following VIM command.

<pre>
:%!sort -k1,1n -k2,2n -s
</pre>

Which I map to a **custom command**&#160;(S) in my .vimrc file:

<pre>

:command S %!sort -k1,1n -k2,2n -s

</pre>

Using a plain text file for my TODO list is the **simplest and fastest** way I found to manage my jobs. With VIM I can add tasks anywhere in the list and then use VIMs powerful commands to sort, search and filter my tasks. If I ever need to I can also open up my list in a spreadsheet program, although so far I haven't had to do that.

Give it a try, or let me know if you think you have a better task management system in the comments below.
