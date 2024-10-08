# Campus Jobs Automation System

The Campus Jobs Automation System is a web-based application designed to improve the process of tracking and approving student work hours. The system aims to automate the approval process while also ensuring compliance with visa regulations for international students.


## Table of Contents

1. [Introduction](#campus-jobs-automation-system)
2. [Prerequisites](#prerequisites)
3. [Getting Started](#getting-started)
6. [Credits](#credits)




## Prerequisites

Before you begin, ensure you have the following prerequisites installed on your system:

**1. Docker Desktop:**

- Download and install Docker Desktop from the [official website](https://www.docker.com/products/docker-desktop/).

- Make sure the Hyper-V feature is enabled in your system's Windows features for optimal performance.

**2. PHP:**

- Download the PHP installer from the [official PHP website](https://windows.php.net/download#php-8.3).

- Select the appropriate PHP version and architecture for your operating system. Ensure to download the thread-safe version if applicable.

- Make sure to add PHP to your system's PATH environment variable during the installation process.

**3. Composer:**

- Download `composer-setup.exe` from [here](https://getcomposer.org/download/).

- Follow the installation instructions provided on the Composer website.

**4. Node.js:**

- Download Node.js from [here](https://nodejs.org/en/download/current).

- Follow the installation instructions provided for your operating system.

**5. Windows Subsystem for Linux (WSL):**

- If you're using Windows, ensure that Windows Subsystem for Linux (WSL) is installed and configured on your system. You can follow the instructions provided [here](https://docs.microsoft.com/en-us/windows/wsl/install).

## Getting Started

**1. Clone Project Repository**:

- Clone the project repositories `git clone https://github.com/finnleygrange/campus-jobs-app.git`.

**2. Open Project in VSCode**:

- Navigate to the `campus-jobs-app` directory using VSCode.
- Open a new terminal within VSCode.

**3. Install Dependencies**:
- In the terminal, execute the following commands:
  
  ```bash
  composer install
  npm install
  ```

**4. Start WSL**:
- Launch WSL by running the following command in the terminal:
     
     ```bash
     wsl
     ```

**5. Run Project in Docker**:
   - Execute the following command in the terminal:
     
     ```bash
     ./vendor/bin/sail up
     ```

**6. View Project**:
   - Open your web browser and navigate to `localhost` to view the project.

## Credits

[Finnley Grange](https://github.com/finnleygrange) <br />
[Daiana A. Patachia-Popa](https://github.com/DaianaPopa) <br />
[Perkins Phoebe](https://github.com/phoebiep) <br />
Purandare Udayan <br />
Harvey Spencer <br />
