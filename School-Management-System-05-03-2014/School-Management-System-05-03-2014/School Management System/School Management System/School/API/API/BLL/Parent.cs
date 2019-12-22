using System;
using System.Collections.Generic;
using System.Text;
using System.Configuration;
using DAL;
using System.Data.SqlClient;
using System.IO;
using System.Data;
using BLL;

namespace BLL
{ 
   public class ParentBLL                               //BLL for parent
    {
        #region "Fields"
       ParentDAL oParentDAL;
       private string _connectionString = "";
       DataTable oDataTable = null; 
        
        #endregion
       
        #region "Constructor"
       public ParentBLL()
        {
            _connectionString = ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString;
        }
        public ParentBLL(string connectionString)
        {
            this._connectionString = connectionString;
        }
       #endregion

        #region "Methods"
        public string ParentInsert(Parent oParent)
        {
            #region "Fields"
            string errorMessage = "";
            #endregion

            try
           {
               oParentDAL = new ParentDAL(_connectionString);
                if(oParent.Id ==0)
               errorMessage = oParentDAL.ParentInsert(oParent.Id,oParent.FirstName, oParent.LastName, oParent.Class, oParent.Section, oParent.ContactNo, oParent.Email, oParent.Address,oParent.StudentEmail, oParent.StudentFirstName,oParent.StudentLastName, oParent.Password, oParent.UserType);
                if(oParent.Id>0)
                    errorMessage = oParentDAL.ParentInsert(oParent.Id, oParent.FirstName, oParent.LastName, oParent.Class, oParent.Section, oParent.ContactNo, oParent.Email, oParent.Address,oParent.StudentEmail, oParent.StudentFirstName, oParent.StudentLastName, null,null);
               return errorMessage;
           }
           catch (Exception ex)
           {
               throw ex;
           }
           finally
           {
               errorMessage = "";
               oParentDAL = null;
           }
       }

       public DataTable ViewParentDetails()
       {
           try
           {
               oDataTable = new DataTable();
               oParentDAL=new ParentDAL();
               oDataTable = oParentDAL.ViewParentDetails();
               return oDataTable;
           }
           catch(Exception ex)
           {
               throw ex;
           }
           finally
           {
           }
       }


       public DataTable SearchParent(Parent oParent)
       {
           try
           {
               oParentDAL = new ParentDAL();
               oDataTable = new DataTable();
               oDataTable=oParentDAL.SearchParent(oParent.FirstName, oParent.LastName, oParent.StudentFirstName, oParent.StudentLastName, oParent.Class, oParent.Section);
               return oDataTable;

               
           }
           catch(Exception ex)
           {
               throw ex;
           }
           finally
           {
               oParent = null;
               oParentDAL = null;
               oDataTable = null;
           }
       }

       public DataTable GetUserName(Parent oParent)
       {      
           try
           {
               oParentDAL = new ParentDAL(_connectionString);
               oDataTable = new DataTable();
               oDataTable = oParentDAL.GetUserName(oParent.Email);
               return oDataTable;

           }
           catch (Exception ex)
           {
               throw ex;
           }
           finally
           {
               oParent = null;
               oParentDAL= null;
           }
       }

       public DataTable ParentDetailsForUpdation(Parent oParent)
       {
           try
           {
               oParentDAL = new ParentDAL(_connectionString);
               oDataTable = new DataTable();
               oDataTable = oParentDAL.ParentDetailsForUpdation(oParent.Id);
               return oDataTable;
           }
           catch(Exception ex)
           {
               throw ex;
           }
           finally
           {
               oParentDAL = null;
               oParent = null;
               oDataTable = null;
           }
       }

       public DataTable LoadEmail(Parent oParent)
       {
           try
           {
               oParentDAL = new ParentDAL(_connectionString);
               oDataTable = new DataTable();
               oDataTable = oParentDAL.LoadEmail(oParent.StudentFirstName, oParent.StudentLastName, oParent.Class, oParent.Section);
               return oDataTable;
           }
           catch (Exception ex)
           {

               throw ex;
           }
           finally
           {

           }
       }
       #endregion
   }
}
