using System;
using System.Collections.Generic;
using System.Linq;
using userProfile.Models;

namespace userProfile.Services
{
    public class ProfileService : IProfileService
    {
        // Mock database (replace with actual database in production)
        private static readonly List<Profile> profiles = new List<Profile>();

        public Profile GetProfileById(int id)
        {
            return profiles.FirstOrDefault(p => p.Id == id);
        }

        public List<Profile> GetAllProfiles()
        {
            return profiles;
        }

        public bool CreateProfile(Profile profile)
        {
            if (profile == null || profiles.Any(p => p.Id == profile.Id))
                return false;

            profiles.Add(profile);
            return true;
        }

        public bool UpdateProfile(int id, Profile updatedProfile)
        {
            var existingProfile = profiles.FirstOrDefault(p => p.Id == id);
            if (existingProfile == null)
                return false;

            // Update fields
            existingProfile.Name = updatedProfile.Name ?? existingProfile.Name;
            existingProfile.Email = updatedProfile.Email ?? existingProfile.Email;
            existingProfile.Phone = updatedProfile.Phone ?? existingProfile.Phone;
            existingProfile.Adress = updatedProfile.Adress ?? existingProfile.Adress;
            existingProfile.Birthdate = updatedProfile.Birthdate ?? existingProfile.Birthdate;

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
