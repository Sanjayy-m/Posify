# Posture Detection System

This project is a posture detection system built using the Laravel framework. It leverages Google's MediaPipe for real-time angle calculations to detect and analyze posture.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
  

## Introduction

The Posture Detection System is designed to monitor and analyze the posture of a user in real-time. By utilizing the Laravel framework for the backend and MediaPipe for processing the video feed and calculating angles between key points, the system can determine whether a user’s posture is correct or incorrect.

## Features

- **Real-time Posture Analysis:** The system uses a webcam feed to analyze the user’s posture in real-time, providing immediate feedback on whether the posture is correct.
- **Angle Calculation:** MediaPipe is employed to calculate angles between key body joints, such as shoulders, elbows, and hips, to determine the user's posture.
- **Laravel Integration:** The Laravel backend handles data storage, user management, and notifications, providing a robust and scalable platform.
- **User Interface:** A simple and intuitive front-end interface allows users to receive real-time feedback on their posture.
- **Notifications:** The system alerts the user when their posture is incorrect, helping them make necessary adjustments.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP 8.x:** The required version of PHP to run the Laravel application.
- **Composer:** A dependency manager for PHP, used to install Laravel and other PHP packages.
- **MySQL or any other supported database:** A database system to store user and posture data.
- **A server environment (Apache, Nginx, etc.):** To serve the Laravel application.
- **Python 3.x:** Required for running the MediaPipe script to calculate angles.

## Installation

### 1. Clone the Repository

Start by cloning the project repository to your local machine:

```bash
git clone https://github.com/your-username/Posify.git
cd Posify
```

### 2. Install Laravel Dependencies

Next, install all the required PHP packages using Composer:

```bash
composer install
```

### 3. Set Up Environment Variables

Copy the example environment file and update it with your specific environment settings:

```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file with your database credentials and other configuration details.

### 4. Set Up the Database

Run the following command to create the necessary database tables:

```bash
php artisan migrate
```

### 5. Integrate MediaPipe

Install MediaPipe and the required Python libraries for angle calculations:

```bash
pip install mediapipe opencv-python
```

Create a Python script in the `scripts` directory (e.g., `posture_analysis.py`) to handle the MediaPipe operations for posture analysis.

## Configuration

- **Environment Variables:** Update the `.env` file with your specific environment configurations, such as database credentials, application settings, and API keys.
- **MediaPipe Settings:** Modify the `pos.py` script as needed to adjust the posture detection parameters and configurations.

## Usage

### 1. Start the Laravel Development Server

To start the Laravel development server, run the following command:

```bash
php artisan serve
```

### 2. Run the Python Script for MediaPipe

Start the MediaPipe script to begin analyzing the video feed:

```bash
python views/python/pos.py
```

### 3. Access the Application

Open your web browser and navigate to `http://localhost:8000` to access the posture detection system. The application will analyze the webcam feed in real-time and provide feedback on your posture.
