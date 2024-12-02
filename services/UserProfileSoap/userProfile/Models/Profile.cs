using System;
using System.ComponentModel.DataAnnotations;
using System.Runtime.Serialization;

namespace userProfile.Models
{
    [DataContract]
    public class Profile
    {
        // The questionmarks are used to make sure that the data can be null.
        [Key]
        public required int Id { get; set; }

        [DataMember]
        public required string Name { get; set; }

        [DataMember]
        public string? Email { get; set; }
        
        [DataMember]
        public string? Phone { get; set; }

        [DataMember]
        public Adress? Adress { get; set; }

        [DataMember]
        public DateTime? Birthdate { get; set; }
    }
} 