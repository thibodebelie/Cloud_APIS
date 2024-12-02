using userProfile.Models;
using userProfile.Services;
using SoapCore; 

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddScoped<IProfileService, ProfileService>();


// Add services to the container.
// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddControllers();
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

var app = builder.Build();

// Configure the HTTP request pipeline.
if (app.Environment.IsDevelopment())
{
    app.UseSwagger();
    app.UseSwaggerUI();
}


app.UseSoapEndpoint<IProfileService>("/profiel", new SoapEncoderOptions());
app.UseHttpsRedirection();
app.UseAuthorization();


app.Run();
