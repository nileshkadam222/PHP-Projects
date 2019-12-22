using System;
using System.Collections.Generic;
using System.Text;

namespace BLL
{
    public class Student
    {
        #region "Fields"
        public int _id;
        public string admissionNo;
        public string _firstName;
        public string _lastName;
        public string _fatherName;
        public string _dateOfBirth;
        public string _joinDate;
        public string _bloodGroup;
        private string _contactNo;
        public string _address;
        public string _email;
        public byte[] _photo;
        public string _busFacility;
        public string _rollNo;
        public string _Class1;
        public string _section;
        private string userName;
        private string password;
        private string _usertype;
        #endregion

        #region  "Properties"
        public int Id
        {
            get
            {
                return _id;
            }

            set
            {
                _id = value;
            }
        }
        public string AdmissionNo
        {
            get
            {
                return admissionNo;
            }
            set
            {
                admissionNo = value;
            }
        }
        public string FirstName
        {
            get
            {
                return _firstName;
            }
            set
            {
                _firstName = value;
            }
        }
        public string LastName
        {

            get
            {
                return _lastName;
            }

            set
            {
                _lastName = value;
            }
        }
        public string FatherName
        {
            get
            {
                return _fatherName;
            }
            set
            {
                _fatherName = value;
            }
        }
        public string DateOfBirth
        {
            get
            {
                return _dateOfBirth;
            }
            set
            {
                _dateOfBirth = value;
            }
        }

        public string JoinDate
        {
            get
            {
                return _joinDate;
            }
            set
            {
                _joinDate = value;
            }
        }
        public string BloodGroup
        {
            get
            {
                return _bloodGroup;
            }
            set
            {
                _bloodGroup = value;
            }
        }
        public string ContactNo
        {
            get
            {
                return _contactNo;
            }
            set
            {
                _contactNo = value;
            }
        }
        public string Address
        {
            get
            {
                return _address;
            }
            set
            {
                _address = value;
            }
        }
        public string Email
        {
            get
            {
                return _email;
            }
            set
            {
                _email = value;
            }
        }
        public byte[] Photo
        {
            get
            {
                return _photo;
            }
            set
            {
                _photo = value;
            }
        }
        public string BusFacility
        {
            get
            {
                return _busFacility;
            }
            set
            {
                _busFacility = value;
            }
        }
        public string RollNo
        {
            get
            {
                return _rollNo;
            }
            set
            {
                _rollNo = value;
            }
        }
        public string Class1
        {
            get
            {
                return _Class1;
            }
            set
            {
                _Class1 = value;
            }
        }
        public string Section
        {
            get
            {
                return _section;
            }
            set
            {
                _section = value;
            }
        }
        public string Password
        {
            get
            {
                return password;
            }
            set
            {
                password = value;
            }
        }

        public string UserName
        {
            get
            {
                return userName;
            }
            set
            {
                userName = value;
            }
        }
        public string Usertype
        {
            get
            {
                return _usertype;
            }
            set
            {
                _usertype = value;
            }
        }

        #endregion
    }
}
 