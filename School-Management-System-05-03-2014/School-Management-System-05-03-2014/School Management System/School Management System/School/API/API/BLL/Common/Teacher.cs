using System;
using System.Collections.Generic;
using System.Text;

namespace BLL
{
    public class Teacher
    {
        #region "Fields"
        private int _id;
        private string _name;
        private string _fatherName;
        private string _qualification;
        private string _subject;
        private string _dateOfBirth;
        private string _dateOfJoining;
        private string _email;
        private string _contactNo;
        private string _address;
        private string _password;

        #endregion

        #region "Properties"

        public int Id
        {
            get { return _id; }
            set { _id = value; }
        }

        public string Password
        {
            get { return _password; }
            set { _password = value; }
        }

        public string Address
        {
            get { return _address; }
            set { _address = value; }
        }
        public string ContactNo
        {
            get { return _contactNo; }
            set { _contactNo = value; }
        }


        public string Email
        {
            get { return _email; }
            set { _email = value; }
        }

        public string DateOfJoining
        {
            get { return _dateOfJoining; }
            set { _dateOfJoining = value; }
        }

        public string Subject
        {
            get { return _subject; }
            set { _subject = value; }
        }


        public string Qualification
        {
            get { return _qualification; }
            set { _qualification = value; }
        }

        public string FatherName
        {
            get { return _fatherName; }
            set { _fatherName = value; }
        }

        public string Name
        {
            get { return _name; }
            set { _name = value; }
        }
        public string DateOfBirth
        {
            get { return _dateOfBirth; }
            set { _dateOfBirth = value; }
        }
        #endregion

    }
}