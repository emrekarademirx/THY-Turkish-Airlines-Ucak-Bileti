import requests

# API endpoint
url = "https://api.thy.com/flights/search"

# API key
api_key = "your_api_key_here"

# Request parameters
params = {
    "origin": "IST",
    "destination": "DXB",
    "date": "2023-03-10"
}

# Make API request
response = requests.get(url, params=params, headers={
    "Authorization": "Bearer " + api_key
})

# Check if the request is successful
if response.status_code == 200:
    #
