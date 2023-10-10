import requests
import pygame

# Replace this with the API endpoint you want to fetch data from
api_url = "http://localhost/Testing/Testing.php"

try:
    # Send a GET request to the API endpoint
    response = requests.get(api_url)

    # Check if the request was successful (HTTP status code 200)
    if response.status_code == 200:
        # Parse the JSON data from the response
        data = response.json()

        # Print the retrieved data
        print("API Response:")
        for index, item in enumerate(data):
            print(f"Index: {index}, Item: {item}")
    else:
        # Print an error message if the request was not successful
        print("Error:", response.status_code)

except requests.exceptions.RequestException as e:
    # Handle any exceptions that may occur during the request
    print("An error occurred:", e)
