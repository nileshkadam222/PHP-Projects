using System;
using System.Collections.Generic;
using System.Text;

namespace BLL                           //BLL Properties Layer for Login
{
    public class School
    {
        #region "Fields"
        private int _id;

        private string _userName;

        private string _password;

        private string _logIn;

        private string _firstName;

     
        #endregion

        #region "Properties"

        public string UserName
        {
            get
            {
                return _userName;
            }
            set
            {
                _userName = value;
            }
        }

        public int Id
        {
            get { return _id; }
            set { _id = value; }
        }

        public string Password
        {
            get
            {
                return _password;
            }
            set
            {
                _password = value;
            }
        }
        public string LogIn
        {
            get { return _logIn; }
            set { _logIn = value; }
        }

        public string FirstName
        {
            get { return _firstName; }
            set { _firstName = value; }
        }


        #endregion
    }
}
