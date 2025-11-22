# Netflix DevOps Project

🎬 Netflix -Video Streaming Platform (Full-Stack + DevOps Pipeline)

A modern, end-to-end video streaming application designed with a complete DevOps pipeline—covering development, testing, containerization, CI/CD automation, and deployment. This project simulates a real production workflow for building and managing scalable streaming platforms.


📌 1. Short Description / Purpose

StreamBox is a full-stack Netflix-style streaming platform built to demonstrate how modern web applications can be developed, tested, containerized, and continuously deployed using a full DevOps lifecycle.
The purpose of this project is to integrate full-stack engineering, database architecture, CI/CD automation, Dockerized environments, and test automation into one cohesive system.


🛠️ 2. Tech Stack

The project was built using the following tools and technologies:

💻 Frontend: HTML, CSS, JavaScript (responsive UI, video UI components)

⚙️ Backend: PHP (authentication, routing, server-side logic, sessions)

🗄️ Database: PostgreSQL (schema design, metadata storage, user profiles, watch history)

🔧 CI/CD: Jenkins (automated builds, tests, deployments)

🐳 Containerization: Docker (app containerization, reproducible environments)

🧪 Testing: Selenium (UI automation for login, navigation, video playback)

📁 File Formats: .php, .html, .js, .css, .sql, .dockerfile


📚 3. Data Source

Source: Custom-designed relational database built with PostgreSQL.

The underlying database includes:

Users Table: Login credentials, profile details

Videos Table: Video metadata, categories, descriptions

Playback History Table: User activity, last watched timestamps

Streaming Stats Table: Video popularity, watch duration, user interaction metrics

This schema simulates a real streaming service environment and supports authentication, recommendations, and analytics.


🌟 4. Features / Highlights

• Business Problem

Modern streaming platforms require automation across development, testing, and deployment. Traditional manual deployment leads to inconsistent environments, delayed testing, and high maintenance overhead.

Common challenges:

How to automate builds, tests, and deployment?

How to ensure consistent environments across development and production?

How to validate UI behavior (login, playback, navigation) reliably?

How to containerize a full-stack app for scalability?

• Goal of the Platform

To build a fully functional streaming application and design a complete DevOps pipeline that:

Automates testing and deployment

Ensures consistent environments via containerization

Provides a modular, scalable platform

Demonstrates professional real-world DevOps practices

Validates end-to-end user flows with automated testing


🧭 5. Walkthrough of Key Features

1️⃣ User Authentication Module

Secure login and signup

Session handling in PHP

Input validation and database-backed credential checks

2️⃣ Streaming Interface (UI Layer)

Netflix-style layout with dynamic categories

Responsive design for desktop & mobile

Video player with play/pause, timeline, full screen

3️⃣ Database-Driven Content Management

Fetch video metadata from PostgreSQL

Track user behavior (recently watched, watch history)

Category-based filtering (action, comedy, drama, etc.)

4️⃣ DevOps Pipeline (CI/CD with Jenkins)

Automated pipeline stages include:

Build Stage: Fetch source code, prepare environment

Test Stage: Run Selenium automated tests for UI flows

Container Build: Dockerfile used to build app image

Deployment: Automated deployment to a test or staging environment

Notifications: Jenkins email/slack alerts on pass/fail

5️⃣ Dockerized Environment

Frontend + backend + PostgreSQL containerized

Application runs consistently across machines

Easy to scale into microservices

6️⃣ Selenium Automated Testing

Automated tests validate:
✔️ User authentication
✔️ Video playback
✔️ UI navigation (search, categories, home screen)
✔️ Interaction workflows

These tests run inside the CI/CD pipeline to ensure every commit is stable.


💡 Business Impact & Insights

Operational Efficiency: Automated CI/CD reduces deployment time and manual effort

Quality Assurance: Selenium tests enhance reliability by catching UI issues early

Scalability: Docker containers make the app easily deployable in any environment

Real-World Simulation: Mirrors actual DevOps workflows used in production engineering

End-to-End Integration: Demonstrates mastery of development, testing, automation, and deployment in one project


🖼️ 6. Screenshots / Demos

![Netflix Page](https://github.com/Shivam163Sharma/Netflix_project-Devops-/blob/main/Netflix%20Page.png)
