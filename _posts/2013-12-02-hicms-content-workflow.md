---
layout: post
title: Hicms core content introduction
category: [hicms]
tags: [content, design]
keywords: FTP
description: 
_layout: english
_template: _english_post
---

As I have posted before how I am really impressed with H!CMS the flat file, non database content managment system which we use to power this site and which we are now recommending to our clients. However I have come to realise that it has radically changed our workflows and I thought a quick post documenting things might interest a few people, or not, still I have this space on the web so here goes. Up until now we have tended to work in the following way whether it be for a static site or a CMS based system.

Firstly we would mock up a preview of the proposed design, this could be a photoshop comp (yes we still use this method as a picture conveys a thousand words) of the front page with the basics sketched out along with the colours establishing the sites basic identity. Changes could easily be factored in before coding, and the client could sign off the design before coding started.

This also gives us a easily identifiable “stile tile” schema to follow with the key elements and colours having been defined in the photoshop file.

Since going “responsive” if required, we also demonstrate the concept by way of a wireframe or quick mock up to show the various layouts at different resolutions. However we have often found a quick demonstration of a previous design will suffice. The CMS is then set up, the fields defined, and the various CMS tags (or the content if a static site) placed into the coded page.

So far so dandy, this has worked well for a long time then along came H!CMS. Having converted this site from a more traditional database powered CMS the setup was pretty painless, we had the content, we FTP content direct from Sublime Text so no need for the control panel, we had the framework, we just needed to convert it into a theme. However when we came to creating a site from scratch for a client things did not go so smoothly. We followed our normal pattern, added some placeholder content via FTP and then set about the setting up the fields.

Things took ages, the design changed, I pulled out what little hair I have left because it just no longer seemed to work as well, the client was luckily oblivious to our angst and was, and still is, happy as anything. I felt like I was fighting something I could not quite get a hold of. I tried to put it down to the fact I was very used to expressionengine and this was similar (cms placeholder tags,) but different enough to be akward, a bit like moving from windows to mac. I had also had a fair bit of experience with Perch which although database based has similarities in the way it templates specific page output, but no this was not the problem.

Then I finally worked it out. Put the content in first, set up the fields, fieldsets and content structure, create the page.md files, add the content in the control panel (or get the client to do it) and the design sort of works itself out. Yes still create a mockup of the framework, but leave the content areas until after the content exists.

This seems to have been a “eureka moment”. When working in traditional CMS systems the content schema is largely hidden in the database, somehow divorced from you, and something to be spat out via CMS tags. I never saw the content other than in a field in the control panel, I know where it was, database tables, relational linked tables etc. With H!CMS the content is physically there to see, be it in a GIT reo or on the server via FTP. You can see it, work with it , bend it, alter it, move it and make it organically and seamlessly part of the site. In fact it is now the most important part of the site, even when working in the design phase, and easy to change, oh, so easy to change.

Yes I know content is king, I know content is what matters, but yet the design defines the sites identity. H!CMS seems to be changing how we work here, whether we come out better designers, better content curators or just carry on in obscurity time will tell, but it is a journey I am really looking forward to.






