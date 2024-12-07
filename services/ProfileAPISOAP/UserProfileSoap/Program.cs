using userProfile.Models;
using userProfile.Services;
using SoapCore;
using Microsoft.EntityFrameworkCore;
using SoapCore.Extensibility;

var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddDbContext<ProfileContext>(options =>
    options.UseNpgsql(builder.Configuration.GetConnectionString("DefaultConnection")));
builder.Services.AddScoped<IProfileService, ProfileService>();
builder.Services.AddSingleton<IFaultExceptionTransformer, DefaultFaultExceptionTransformer<SoapCore.CustomMessage>>();

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

app.UseSoapEndpoint<IProfileService>("/profile", new SoapEncoderOptions());
app.UseHttpsRedirection();
app.UseAuthorization();
app.Run();