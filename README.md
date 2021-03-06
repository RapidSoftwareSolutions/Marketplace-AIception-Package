[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/AIception/functions?utm_source=RapidAPIGitHub_AIceptionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# AIception Package
Identify objects, faces and a person's age from an image. Connect to the AIception Visual Recognition API to identify objects, faces and a person's age from an image. Test an API call and export the code into your app.
* Domain: [aiception.com](https://aiception.com/)
* Credentials: apiToken

## How to get credentials: 
0. Sign up in [AIception](https://aiception.com#section-signup).
1. Navigate to [Dashboard page](https://aiception.com/dashboard).
2. Click "Revoke and Generate Token".
3. Use "Secret API Token" as "apiToken".


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## AIception.findFaces
Get a list of all the locations of the faces in the image.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| imageUrl| String     | The image to analyze.

## AIception.getFaceTask
Gets the face task.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| taskId  | String     | An internal id for the task.

## AIception.createFaceAgeTask
Creates a new face age task that approximates the age of the person in the image.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| imageUrl| String     | The image to analyze.

## AIception.getFaceAgeTask
Gets the face_age task.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| taskId  | String     | An internal id for the task.

## AIception.createDetectObjectTask
Creates a new detect object task that recognizes the object in the image.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| imageUrl| String     | The image to analyze.

## AIception.getDetectObjectTask
Gets the detect_object task.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| taskId  | String     | An internal id for the task.

## AIception.createAdultContentTask
Creates a new adult_content task that tells the if the image has nudity or sexual content.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| imageUrl| String     | The image to analyze.

## AIception.getAdultContentTask
Gets the adult_content task.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| taskId  | String     | An internal id for the task.

## AIception.createArtisticImage
Given an image content and a style image create a new stylized image of the content.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| imageUrl| String     | The content image to analyze.
| styleUrl| String     | The style image to analyze.

## AIception.getArtisticImageByTaskId
The artistic_image will have the urls of the stylized images.

| Field   | Type       | Description
|---------|------------|----------
| apiToken| credentials| Secret API Token.
| taskId  | String     | An internal id for the task.

