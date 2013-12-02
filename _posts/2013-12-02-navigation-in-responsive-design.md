---
layout: post
title: Navigation in Responsive Design
category: [Tech]
tags: [template, design]
keywords: FTP
description: 
_layout: english
_template: _english_post
---

I&#8217;ve looked  at a lot of websites on my iPhone. I&#8217;ve tried to study how other designers and developers out there are tackling navigation when their website is viewed on a tiny screen. A typical website built for a desktop computer? No problem. You can build whatever the heck you want. Get crazy with Mega Menus and shit. Make your drop downs slide all sexy like - or ease in ever so gently. That&#8217;s not the tough part. The tough part is what to do with that huge mega menu once your viewport gets down below let&#8217;s say 800px or so. That&#8217;s when the fun begins.

So I started to check out what the web had to offer on responsive navigation. I found a few decent resources out there. I found a few interesting techniques (and even made a fancy one myself.) Then I decided I needed to learn more about each technique. So I went ahead and built a little website with a bunch of demos - because we all know that experience is the best teacher.

Here are a few fun things I have learned about how to handle navigation on your responsive projects:

## Make ALL of your content accesible from all platforms and devices.

It may be tempting to simply hide something on your website when you get down to a small screen size - but don&#8217;t penalize your users just because they are viewing your website from their phone. I know there&#8217;s been a debate going on about what context your users are using your website for - but personally I think it&#8217;s crap. If someone wants to view your website they want to find out everything you have to offer - they don&#8217;t just visit your website on their phone to grab your address. If I&#8217;m at looking for info on a restaurant while on my 24&#8221; iMac, I want to be able to find their address, menu, and phone number just as I would if I were walking around downtown and considering eating there in half an hour.  So don&#8217;t hide your content when you get down to small screens - be creative and find a way to display all of the same information. Decide if you really need that information anyway - responsive design is a great reason to re-visit your content strategy.

## Make it easy for the user to find your mobile menu!

Sounds simple - but sometimes the use of the hamburger icon isn&#8217;t too obvious for your Mom to decipher as the button that activates your menu. Case in point - Microsoft&#8217;s menu icon. Some people call the button that twitter bootstrap and the facebook app popularized the &#8220;hamburger&#8221; icon. If that&#8217;s the case then Microsoft&#8217;s icon is a club sandwich.


## Make your buttons easy to tap.

The average human finger pad is 10-14mm. Apple suggest making your buttons at least 44x44 points (they say points because they can&#8217;t technically say pixels due to their high res retina screens). But this is something really simple - just add more padding to your links if they&#8217;re hard to click when on a phone or a tablet.

## Take advantage of accordions, lists, other creative elements to hide/show content.

There are many elements you can use in your menu to hide and show menus and sub-menus. jQuery UI has a simple accordion - heck you don&#8217;t even need jQuery UI - you can just use a simple function to add a class to the parent item and use CSS to hide or show something. There&#8217;s also the off-canvas method, which is nice for smaller menus. But don&#8217;t forget about the option of keeping your menu really small and utilize landing pages that hold your sub-navigation. This method requires you to really think through your content strategy, but it&#8217;s definitely worth it in the end.

## There is no hover property on touch devices!

We can pretty much trace the need for responsive web design back to the creation of smart-phones - and smart-phones are touch enabled devices. They don&#8217;t have a mouse - therefore there is no hover state. There is only touch.

Try to stay away from the hover property when building responsive websites. For years we have built menus with unordered lists that when hovered over, a drop-down will appear. While this is great for a device with a mouse, what about a device without one? I would rather see a drop-down menu activated with a click or a touch event. This creates consistency across your responsive design. Add a caret or some kind of notification to the user so that she knows something will happen when that menu item is clicked.

I found an interesting bug when I purchased a touch screen Windows 8 Lenovo desktop computer - Internet Explorer did not register touch events. It merely simulated click events. Therefore, hover properties were not handled as they are on iOS devices. I tried to activate a hover-enabled drop-down menu, but it was completely inaccesible. The drop-down wouldn&#8217;t stay down long enough for me to click on any of the sub-menus! (Side note: even the Lenovo website wasn&#8217;t accesible from their own device! #fail)

So this leads me to tell you this - **optimize your website for TOUCH first, hover second**. Don&#8217;t hide valuable content behind items where &#8220;hovering&#8221; is needed.


## Should I Hide Menu Items to Make My Navigation Responsive?

The quick answer: probably not. The long answer depends on your situation. How big and complex is your navigation? Do you have tertiary navigation? Is your site jam packed with content on the homepage? Do you already have calls to action on the homepage that can get the user to your &#8220;hidden&#8221; sub-nav?

The reason I don&#8217;t like hiding your sub-nav: why hide content from your users just because they are browsing your website from a mobile device? Odds are, they are searching for the same exact content they would be searching when on a desktop. Don&#8217;t penalize your users just because they have a smaller screen.

## In Conclusion

So after all of this research, here is a link to the site that I built which contains some examples of navigation patterns.

