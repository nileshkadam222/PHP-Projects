using System;
using System.Collections.Generic;
using System.Text;

namespace BLL
{
  public class Exams
  {
      #region "Fields"
      private int _id;

      private int _rollno;

      
      private string _telugu;

      private string _hindi;

    
      private string _english;

     
      private string _maths;

     
      private string _science;

    
      private string _social;

     
      private string _class;

   
      private string _section;

      private string _Class;

      private string _examtype;

      private string _studentName;

      private string _subjectMarks;

      private string _message;

      private string _subjectName;

            #endregion

      #region "Properties"
      public string Telugu
      {
          get { return _telugu; }
          set { _telugu = value; }
      }
      public string Examtype
      {
          get { return _examtype; }
          set
          {
              _examtype = value;
          }
      }
      public string Hindi
      {
          get { return _hindi; }
          set { _hindi = value; }
      }
      public string Class
      {
          get { return _Class; }
          set { _Class = value; }
      }


      public string English
      {
          get { return _english; }
          set { _english = value; }
      }
      public string Maths
      {
          get { return _maths; }
          set { _maths = value; }
      }
      public string Science
      {
          get { return _science; }
          set { _science = value; }
      }
      public string Social
      {
          get { return _social; }
          set { _social = value; }
      }
      public string _class1
      {
          get { return _class; }
          set { _class = value; }
      }
      public string Section
      {
          get { return _section; }
          set { _section = value; }
      }
      public int Id
      {
          get { return _id; }
          set { _id = value; }
      }

      public string StudentName
      {
          get { return _studentName; }
          set { _studentName = value; }
      }


      public int Rollno
      {
          get { return _rollno; }
          set { _rollno = value; }
      }

      public string SubjectName
      {
          get { return _subjectName; }
          set { _subjectName = value; }
      }


      public string SubjectMarks
      {
          get { return _subjectMarks; }
          set { _subjectMarks = value; }
      }

    
      public string Message
      {
          get { return _message; }
          set { _message = value; }
      }
      #endregion
  }
}
