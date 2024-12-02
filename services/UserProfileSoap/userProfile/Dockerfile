# Use the official .NET SDK image for building the application
FROM bitnami/dotnet-sdk:8 AS build

# Set the working directory in the container
WORKDIR /app

# Copy the .csproj file(s) and restore dependencies
COPY *.csproj ./
COPY *.sln ./
RUN dotnet restore

# Copy the rest of the application code
COPY . ./

# Build the application
RUN dotnet build -c Release -o out

# Expose the application port (5164)
EXPOSE 5109

CMD [ "dotnet", "run" , "--urls=http://0.0.0.0:5109"]