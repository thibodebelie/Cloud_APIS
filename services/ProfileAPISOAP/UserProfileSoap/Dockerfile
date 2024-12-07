FROM mcr.microsoft.com/dotnet/sdk:8.0 AS build

WORKDIR /app

COPY *.csproj ./

RUN dotnet restore

COPY . ./

RUN dotnet build -c Release -o out

EXPOSE 5109

CMD ["dotnet", "run", "--urls=http://0.0.0.0:5109"]