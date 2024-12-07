using System;
using System.Collections.Generic;
using System.Linq;
using userProfile.Models;

namespace userProfile.Services
{
    public class ProfileService : IProfileService
    {
        private static readonly List<Profile> profiles = new List<Profile>();

        public Profile GetProfileById(int id)
        {
            return profiles.FirstOrDefault(p => p.Id == id);
        }

        public List<Profile> GetAllProfiles()
        {
            Console.WriteLine($"Total profiles: {profiles.Count}");
            return profiles;
        }

        public bool CreateProfile(Profile profile)
        {
            if (profile == null)
            {
                Console.WriteLine("Profile is null");
                return false;
            }

            if (profiles.Any(p => p.Id == profile.Id))
            {
                Console.WriteLine("Profile ID already exists");
                return false;
            }

            profiles.Add(profile);
            Console.WriteLine($"Profile added: {profile.Name}");
            return true;
        }

        public bool UpdateProfile(int id, Profile updatedProfile)
        {
            var existingProfile = profiles.FirstOrDefault(p => p.Id == id);
            if (existingProfile == null)
                return false;

            existingProfile.Name = updatedProfile.Name ?? existingProfile.Name;
            existingProfile.Email = updatedProfile.Email ?? existingProfile.Email;
            existingProfile.Phone = updatedProfile.Phone ?? existingProfile.Phone;
            existingProfile.Address = updatedProfile.Address ?? existingProfile.Address;
            existingProfile.Birthdate = updatedProfile.Birthdate != default ? updatedProfile.Birthdate : existingProfile.Birthdate;

            return true;
        }

        public bool DeleteProfile(int id)
        {
            var profile = profiles.FirstOrDefault(p => p.Id == id);
            if (profile == null)
                return false;

            profiles.Remove(profile);
            return true;
        }
    }
}