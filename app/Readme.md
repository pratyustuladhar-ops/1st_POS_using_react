# POS and Inventory Management System

## Project Overview

This project is a Point of Sale (POS) and Inventory Management System developed using Laravel and PostgreSQL.

The system is designed to manage:

* Products
* Suppliers
* Customers
* Users (Admin/Cashier)
* Purchases (Stock In)
* Sales (Stock Out)

## Technologies Used

* Laravel 12
* PostgreSQL
* pgAdmin
* PHP
* Git & GitHub

## Database Design

The database consists of the following tables:

1. suppliers
2. products
3. customers
4. users
5. purchases
6. purchase_items
7. sales
8. sale_items

## Relationships

* One Supplier can supply many Products.
* One Purchase can contain multiple Purchase Items.
* One Sale can contain multiple Sale Items.
* Products are linked to Suppliers.
* Purchases are linked to Suppliers and Users.
* Sales are linked to Customers and Users.

## Features Implemented

* Database schema design
* ER Diagram creation
* Laravel migrations
* PostgreSQL integration
* Primary and Foreign Key relationships

## Current Status

Completed:

* Database Design
* Laravel Migrations
* PostgreSQL Setup

In Progress:

* Models
* Controllers
* CRUD Operations

## Author

Pratyush Tuladhar
