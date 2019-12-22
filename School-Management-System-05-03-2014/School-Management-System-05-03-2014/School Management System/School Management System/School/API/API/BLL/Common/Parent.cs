using System;
using System.Collections.Generic;
using System.Text;

namespace BLL
{
    public class Parent        //for properties
    {

        #region  "Fields"
        private int _id;

        private string _firstName;

       
        private string _lastName;

      
        private string _Class;

       
        private string _section;

        
        private string _contactNo;

        
        private string _email;

      
        private string _address;

        private string _studentEmail;

       
        private string _studentFirstName;

       
        private string _studentLastName;

        private string _password;

       
        private string userType;

       

        #endregion

        #region "Properties"

        public int Id
        {
            get { return _id; }
            set { _id = value; }
        }


        public string FirstName
        {
            get { return _firstName; }
            set { _firstName = value; }
        }
        public string LastName
        {
            get { return _lastName; }
            set { _lastName = value; }
        }
        public string Class
        {
            get { return _Class; }
            set { _Class = value; }
        }
        public string Section
        {
            get { return _section; }
            set { _section = value; }
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
        public string Address
        {
            get { return _address; }
            set { _address = value; }
        }
        public string StudentFirstName
        {
            get { return _studentFirstName; }
            set { _studentFirstName = value; }
        }
        public string StudentLastName
        {
            get { return _studentLastName; }
            set { _studentLastName = value; }
        }

        public string UserType
        {
            get { return userType; }
            set { userType = value; }
        }

        public string Password
        {
            get { return _password; }
            set { _password = value; }
        }
        public string StudentEmail
        {
            get { return _studentEmail; }
            set { _studentEmail = value; }
        }
        #endregion
    }
}
