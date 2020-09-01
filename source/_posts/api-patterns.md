---
extends: _layouts.post
section: content
title: Common Approaches to Building APIs
date: 2020-08-26
description: APIs are used for a variety of reasons.  We discuss how to think about the various approaches
#cover_image: /assets/img/post-cover-image-2.png
featured: true
author: Andrew Graaff
categories: [platform, architecture]
---


## APIs

An API is just an interface for an application.  
API's are typically a gateway for an external computer process 
into the business domain of an application or application service.  The reasons for using an API
instead of just a web form include:

- You have a Single Page Application (SPA).  In this case sessions are typically not possible.  
An authentication or authorization token would be used for each API request since the SPA is completely
decoupled from the backed business domain.

- You have different front end clients e.g. a web application, an iOS applicaton 
and an Android application then you should use an API so that the business domain can be centralised 
in order to maintain control and consistency.

- You need to integrate with 3rd parties.  It could be to send instructions or requests to your business 
domain or it could be to provide a means for them to send you data that you need e.g. via a webhook.  Other techniques
may be possible like using queues but webhooks are viable in many cases.  In any event in this case you will need
an API.

###Resources or Instructions
In many instances APIs are based around reading or mutating resources e.g. REST and GraphQL are based
on this.  The other option is to be based on instruction or actions. For example lets say in logistics we 
want to finalise a Trip.  We could take a resource approach and send through a full transport payload with one
difference from the current trip i.e. the status changes from "PLANNING" to "PLANNED". We could also use a 
PATCH and patch the status i.e.send through just the status in the payload and not the full trip.  In both cases
we have lost the semantic of what has happened.  

If we take an instruction or action based API we would do something like consume the "finaliseTrip" API. This would
in effect to the same thing but it would be able to generate an event e.g. "TRIP_FINALISED" and that would carry the
semantic value.

So now if a third party wanted to receive information about when the trip was finalised they would be able
to subscribe or receive the "TRIP_FINALISED" event rather than subscribe to the full t0 changes on the trip 
and infer what is happening based on looking at "STATUS" fields.  This means the actual structure of
the resource can change without effecting the API or event but the internal representation of the API
can change.

