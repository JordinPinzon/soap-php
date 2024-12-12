# SOAP PHP Application

This is a simple SOAP-based application implemented in PHP. The service exposes a basic operation (addition), and the client communicates with the server via SOAP.

## Requirements

Before running the application, make sure you have the following:

- PHP 7.0 or higher
- Apache or any web server with PHP support
- Docker (optional, for running the application inside a container)

## Installation and Running

### Option 1: Run Locally

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/JordinPinzon/soap-php.git
    cd soap-php
    ```

2. Place the `service.wsdl` file in the web server's document root, or configure it to point to the correct location (e.g., `/var/www/html/service.wsdl`).

3. Set up the Apache web server to serve the PHP files (`index.php`, `server.php`). You can use XAMPP, WAMP, or your own Apache server.

4. Start the web server (Apache) and navigate to `http://localhost/service.wsdl` to confirm the WSDL file is accessible.

5. Run the PHP SOAP server:

    ```bash
    php -S localhost:8081
    ```

    The service will be available at `http://localhost:8081/server.php`.

### Option 2: Run with Docker

If you want to run the app inside a Docker container, follow these steps:

1. Build the Docker image:

    ```bash
    docker build -t soap-php-service .
    ```

2. Run the Docker container:

    ```bash
    docker run -it -p 8081:80 soap-php-service
    ```

    The service will be available at `http://localhost:8081/service.wsdl` and will respond to SOAP requests on `http://localhost:8081/server.php`.

## Important Files

- `index.php`: The main entry point for the client-side request, loads the WSDL and calls the SOAP method.
- `server.php`: The SOAP server implementation that handles incoming SOAP requests.
- `service.wsdl`: The WSDL file that describes the SOAP service operations and messages.
- `Dockerfile`: The file used to build the Docker image for running the application inside a container.

## SOAP Service Details

The SOAP service provides an operation `add`, which takes two integers `a` and `b` as input and returns their sum as `result`.

- **WSDL URL**: `http://localhost:8081/service.wsdl`
- **SOAP Operation**: `add`
  - **Input Parameters**: `a` (int), `b` (int)
  - **Output**: `result` (int)

## Contributing

If you wish to contribute to this project, please fork the repository, make your changes, and then open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
