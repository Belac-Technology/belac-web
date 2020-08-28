---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>About</h1>

    <!--<img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">-->

    <p class="mb-6">Belac is an initiative targeted at SMME businesses operating at smaller scale and/or lower margins
        than many enterprises that need tools, patterns and solutions that do not require large teams. Belac has reviewed
        the approaches taken by businesses that have changed the way the world works and applied these to the SMME context.
</p>

    <p>The SMME context includes:</p>
    <ul>
        <li>A need for simplicity without sacrificing the ability to create dynamic business systems.</li>
        <li>Functional Business Intelligence capability that does not require maintaining expensive cumbersome ETL assets.</li>
        <li>SMME businesses are often highly connected with their customers and partners when providing or executing business processes.</li>
    </ul>

    <p>
        In order to be successful SMME businesses need to internalise the following:
    </p>
    <ul>
        <li>The wisdom of the "90s" no longer applies.</li>
        <li>The dichotomy of business and "IT" is false - at least in so far as it related to business systems.  This means
            the phrase "its a business decision" is no longer useful.  Anyone involved in the development and/or configuration
            of business systems is business.</li>
        <li>That if architected correctly items like high availability, elaborate backup and recovery and no form
        of compromise related to building robust solutions should be allowed.  Given the resources and abstractions available
        this concern is no longer valid.  Any business system which does not support this premise is technical debt
        and has a much higher cost than the direct hosting and management costs reflected on the Income Statement.</li>
        <li>That using big external <em>business</em> systems developed by third parties should be avoided where ever possible.  These
            systems are designed to appeal to everyone and therefore no one.  The more use cases they support outside your own
            business the more hidden cost there is in using them and the more they will ultimately prevent a business from
            being dynamic.   The hand cuffs they place on a business should be carefully evaluated and avoided if at all possible.
        </li>
    </ul>

    <p>Belac is an attempt to raise awareness of what is possible with focus, a few building blocks and attention to detail.
    It will provide patterns, approaches, and open source software to facilitate the efficient and effective transmission of
        transactional data.</p>

@endsection
