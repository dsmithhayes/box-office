# Box Office

Box Office (working name) is a software application for a production to manage 
selling tickets to their event. The goal of this software is to become a
self-hosted solution for small independent theatres or productions, but also a
service to sign up for and utilize.

## Features

When signing up for an account, you define yourself as a Producer, and as the
producer to have control over configuration of the _Venue_, _Shows_, the
_Tickets_. When a someone purchases a ticket to your _Show_, they become a
_Patron_.

* Venue
  * Location Details
  * Description
  * General Admission or Seated Tickets
  * Max Capacity
  * General Venue layout
    * Seating
    * Standing Room
* Show
  * Name of the Show
  * Run Times
    * When?
    * How long?
    * Pre-show, or Doors time
* Purchasing
  * Price-by-seating
  * General Admission Pricing
  * Group Discounts
  * Coupon Codes
  * Free Tickets

## Stack

The stack for the Box Office application should be simple. It will be a PHP 
application with a MySQL back end that runs on NGiNX. How all of that is 
deployed is another question.
