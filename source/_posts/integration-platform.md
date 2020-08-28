---
extends: _layouts.post
section: content
title: The Necessity of a Common Integration Platform
date: 2020-08-26
description: Why an Integration Platform is a fundamental enabler to building a dynamic business
#cover_image: /assets/img/post-cover-image-2.png
featured: true
author: Andrew Graaff
categories: [platform, architecture]
---


## Integration Platform

An integration platform is a building block to dynamic systems.  It allows a unified service from which all 
business events can be defined and registered.  It is a central place for systems needing the information
to request access to it (subscribe).  It is more than messaging and more than a webhook runner but still has a small surface area 
(interface).

###Context
![Integration Platform Context](/assets/img/integration_platform.jpg)

An integration platform should not be seen as a "data integration" system,  it is not
simply for point-to-point integrations.  It can do that when necessary.  
The goal is to be able to mix internally built applications and services with SAAS and third party systems 
to provide one a consistent "logical" view of what is occurring within the business.

We can see that it allows applications to register the result of business operations e.g. order placed
under the defined business domains.  It then allows internal and external systems to register to receive these 
business events.  The producer of the event is effectively decoupled from the application(s) requiring 
the event data. This allows for changes to be made efficiently since it does not matter which application 
creates the event in the course of performing a business operation or which application(s) consume the event.

It can also be effectively used to update a data warehouse for realtime reporting and notification capability.

Since every system needs an integration capability it would be ineffective to duplicate this capability.  
It would also lead to fragmentation and difficulty in getting a view of what is occurring within the entire
"business system" i.e. all the systems working together to achieve the businesses goals.

###Components
![Integration Platform Context](/assets/img/integration-platform-components.jpg)
What are some of the components offered by an integration platform?

<ul>
<li>
Efficient, reliable resilient mediation between systems.  This would include guaranteeing of delivery,
deduplication, that related events will not be processed out of sequence where necessary, etc.
</li>
<li>An append only timestamped, sequenced business event log.  This allows efficient business event replay
which may be especially useful in populating a Data Warehouse effectively.</li>
<li>Authentication and Authorisation - Control of who can access which business events.</li>
<li>Audit capable - all relevant data needed to effectively audit what has happened is available.  
This includes all actions performed using the integration platform API.</li>
<li>Control - the ability for business and technical users to see which business events have been generated
which business systems have subscribed and consumed these events and what the status is.  
The ability to remediate problems which may have occurred.</li>
<li>Unified logging, tracing and observability.</li>
<li>Synchronous and Asynchronous capability when dealing with large quantity or 
large size business events.</li>
</ul>

###Conclusion
There are many additional aspects to this pattern which will be discussed further. I hope this will convince
you that the central integration platform capability is vital to a dynamic system.  Belac is developing an 
open source version which makes some choices optimised for SMME's.  This will show you that this capability
is not difficult to implement or run. 