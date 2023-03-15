This is a **Web App** that utilizes Laravel/MySQL as backend and ReactJs as frontend.

All of the solution can be found in this [Github repo](https://github.com/madewithlove/technical-assignment-full-stack-engineer-mghossain/tree/master).

This documentation is split into two documents:
- This document contatins the APIs' documentaion, Introduction, Objectives, Benefits and Limitations, and the Software Development Concepts used.
- The second document contains instructions on how to deploy and run the docker image.

# Introduction
Shopping Hive is an online shopping platform which helps the sales team gather data in order to produce targeted discounts.

## Back-End
[Laravel](https://laravel.com/) is used to build the RESTful APIs and serves as the back-end.

This solution contains three APIs:
- BasketItemAPI: Responsible for showing all of the basket items, storing the basket item, and deleting the basket item, as well as handling the sales data by logging the Item Stats.
- ProductAPI: Responsible for showing all of the Products.
- ItemStatAPI: Responsible for showing the sales stats.

[MySQL](https://www.mysql.com/) is used as the database management system.

## Front-End
[Reactjs](https://reactjs.org/is) is used as the frontend library for demonstrating the API's functionalities.
- The front-end also demonstrates the use of [tailwind.css](https://tailwindcss.com/) a CSS framework.
- The front-end also features both [Datatables](https://datatables.net/), a robust and intelligent HTML table enhancement plugin, in conjunction with [jQuery](https://jquery.com/), to create the Sales Statistics table.

## Docker
All of the solution is packed into a [Docker](https://docs.docker.com/) image.
<br>Instructions are found in the docker-Readme.txt on how to configure and run the container.

# Objective
The objective of the Shopping Hive application is to track the products that were added to the shopping baskets but removed before checkout, in order to provide the sales department the data needed for targeted discounts and promotions.

# Benefits and Limitations
**Benefits**
- The app is containarized so it can be deployed on any environment.
- My development process adheres to the principles of TDD.
- The application is designed to be scalable and capable of handling large transactions.
- The solution is well-documented and can be easily transferred to another developer.

**Limitations**
- Security concerns: The application's may not be secure enough to protect the data.
- The application is not be available in certain languages or regions, which can limit its accessibility to global audiences.
- The front-end design and visuals require enhancement.

# Software Development Concepts
In this documentation, we will explain the use of some of the most essential software development concepts in the development of an application.
Specifically, we will focus on TDD, Repository design, Microservices, Client-Server architecture, and Laravel Observers.
<br>These concepts helped to ensure that the application was functional, reliable, and met the requirements. By incorporating these concepts into the development process, we were able to create a robust and scalable application.

## Test-driven development (TDD)
 The goal of TDD is to ensure that the software code is functional, reliable, and meets the requirements specified by the client. In the development of the application, TDD was used to create unit tests for all the functionalities to ensure that they work correctly before implementing them.

## Repository Design
Repository design is a software development pattern that provides an abstraction layer between the application logic and the data source. It is used to simplify data access and provide a uniform interface for accessing data from different sources. In the development of the application, Repository design was used to create a data access layer that provided a unified interface for accessing data from the database.

## Laravel Observers
Laravel observers are classes that listen to specific events that occur in the application and perform certain actions in response to those events. In the development of the application, Laravel observers were used to perform specific actions such as updating the sales statistics in the item_stats table in response to specific events such as adding, removing, and checking out itmes from the cart.

## Client-Server Architecture
Client-server architecture is a software development pattern that involves splitting the application into two parts: the client-side and the server-side. The client-side is responsible for interacting with the user while the server-side is responsible for providing data and services to the client-side. In the development of the application, client-server architecture was used to create a responsive and scalable application.

## Microservices
Microservices is a software development approach that involves creating small, independent services that communicate with each other using APIs. This approach allows for flexibility and scalability in the development of complex applications. In the development of the application, microservices were used to create independent services for different functionalities such as user products, shopping cart (basket items), and sales statistics.