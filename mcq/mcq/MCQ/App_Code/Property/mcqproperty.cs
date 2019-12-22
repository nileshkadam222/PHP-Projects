using System;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

/// <summary>
/// Summary description for mcqproperty
/// </summary>
public class mcqproperty
{
    private string _sname, _email, _password, _address, _city, _state, _contact, _quali, _comment, _question, _a, _b, _c, _d, _ans, _subname, _query, _otime;
    private int _id,_sub,_sid,_tnq ;
    private double _pqm, _nm, _etime,_omark,_total;
    private Boolean _astatus;
    private DateTime _stime, _endtime;
	public mcqproperty()
	{
		//
		// TODO: Add constructor logic here
		//
	}

    public DateTime stime
    {
        get
        {
            return _stime;
        }
        set
        {
            _stime = value;
        }
    }

    public DateTime endtime
    {
        get
        {
            return _endtime;
        }
        set
        {
            _endtime = value;
        }
    }
    public string otime
    {
        get
        {
            return _otime;
        }
        set
        {
            _otime = value;
        }
    }
    public double total
    {
        get
        {
            return _total;
        }
        set
        {
            _total = value;
        }
    }

    public double omark
    {
        get
        {
            return _omark;
        }
        set
        {
            _omark = value;
        }
    }
    public double etime
    {
        get
        {
            return _etime;
        }
        set
        {
            _etime = value;
        }
    }
    public double nm
    {
        get
        {
            return _nm;
        }
        set
        {
            _nm = value;
        }
    }
    public double pqm
    {
        get
        {
            return _pqm;
        }
        set
        {
            _pqm = value;
        }
    }
    public int tnq
    {
        get
        {
            return _tnq;
        }
        set
        {
            _tnq = value;
        }
    }
    public string sname
    {
        get
        {
            return _sname;
        }
        set
        {
            _sname=value;
        }
    }
    public string email
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
    public string query
    {
        get
        {
            return _query;
        }
        set
        {
            _query = value;
        }
    }
    public string password
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
    public string address
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
    public string city
    {
        get
        {
            return _city;
        }
        set
        {
            _city = value;
        }
    }
    public string state
    {
        get
        {
            return _state;
        }
        set
        {
            _state = value;
        }
    }
    public string quali
    {
        get
        {
            return _quali;
        }
        set
        {
            _quali = value;
        }
    }
    public string contact
    {
        get
        {
            return _contact;
        }
        set
        {
            _contact = value;
        }
    }
    public int subject
    {
        get
        {
            return _sub;
        }
        set
        {
            _sub = value;
        }
    }
    public string comment
    {
        get
        {
            return _comment;
        }
        set
        {
            _comment = value;
        }
    }
    public int sid
    {
        get
        {
            return _sid;
        }
        set
        {
            _sid = value;
        }
    }
    public int id
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
    public string question
    {
        get
        {
            return _question;
        }
        set
        {
            _question = value;
        }
    }
    public string a
    {
        get
        {
            return _a;
        }
        set
        {
            _a = value;
        }
    }

    public string b
    {
        get
        {
            return _b;
        }
        set
        {
            _b = value;
        }
    }
    public string c
    {
        get
        {
            return _c;
        }
        set
        {
            _c = value;
        }
    }
    public string d
    {
        get
        {
            return _d;
        }
        set
        {
            _d = value;
        }
    }
    public string ans
    {
        get
        {
            return _ans;
        }
        set
        {
            _ans = value;
        }
    }
    public string subname
    {
        get
        {
            return _subname;
        }
        set
        {
            _subname = value;
        }
    }
    public Boolean astatus
    {
        get
        {
            return _astatus;
        }
        set
        {
            _astatus = value;
        }
    }

}
