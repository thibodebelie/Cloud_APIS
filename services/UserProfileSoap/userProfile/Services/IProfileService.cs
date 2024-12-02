using System;
using System.Collections.Generic;
using System.ServiceModel;
using userProfile.Models;

namespace userProfile.Services
{
    [ServiceContract]
    public interface IProfileService
    {
        [OperationContract]
        Profile GetProfileById(int id);

        [OperationContract]
        List<Profile> GetAllProfiles();

        [OperationContract]
        bool CreateProfile(Profile profile);

        [OperationContract]
        bool UpdateProfile(int id, Profile updatedProfile);

        [OperationContract]
        bool DeleteProfile(int id);
    }
}