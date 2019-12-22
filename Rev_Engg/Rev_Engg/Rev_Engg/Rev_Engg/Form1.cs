using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.IO;
using System.Diagnostics;

namespace Rev_Engg
{
    public partial class Form1 : Form
    {
        string path;
        
        public Form1()
        {
            InitializeComponent();
            
        }
        //***********************************************
        
        public void getAttributes(string type, TextWriter tw,string path)
        {
            
            TextReader tr = new StreamReader(@path);
            //TextWriter tw = new StreamWriter(@"E:\RE\UML.txt");
            string s = tr.ReadToEnd();
            tr.Close();
            string[] par = new string[100];
            string[] par1 = new string[100];
            par = s.Split('\n', ';','=');
            int count = 0;
            int ccount = 0;

            for (int i = 0; i < par.Length; i++)
            {
                if (par[i].Contains("class"))
                    ccount++;
                //Console.WriteLine("ccount" + ccount);
                if (par[i].Contains("{"))
                    count++;
                else if (par[i].Contains("}"))
                    count--;
                //MessageBox.Show("hello");
                if (count == 1)
                {
                    
                    if (par[i].StartsWith(type) && !par[i].Contains("("))
                    {
                        //MessageBox.Show("hello");
                        par1 = par[i].Split(' ', ',', ';');
                        //MessageBox.Show(par1[i]);
                        for (int j = 0; j < par1.Length; j++)
                        {
                            if (par1[j] != type)
                            {
                                //Console.WriteLine(ccount.ToString() + par1[j] + ":" + type);
                                tw.WriteLine(ccount.ToString() + par1[j] + " : " + type);
                            }
                        }
                    }
                }
            }

        }
        //***********************************************
        private void Form1_Load(object sender, EventArgs e)
        {
            try
            {
                Directory.CreateDirectory(@"E:\RE");
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string s;
            OpenFileDialog op = new OpenFileDialog();
            op.ShowDialog();
            txtpath.Text = op.FileName;
            path = op.FileName;
            if (path != "")
                button2.Enabled = true;
            try
            {
                TextReader tr = new StreamReader(@path);
                s = tr.ReadToEnd();
                tr.Close();
                txtCode.Text = s;
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }           
        }

        private void button2_Click(object sender, EventArgs e)
        {            
            try
            {
                Process p = new Process();
                p.StartInfo.UseShellExecute = false;
                p.StartInfo.RedirectStandardError = true;
                p.StartInfo.FileName = "javac";
                p.StartInfo.Arguments = path;
                p.Start();
                string error = p.StandardError.ReadToEnd();
                p.WaitForExit();
                int status = p.ExitCode;
                p.Close();
                if (status == 0)
                {
                    MessageBox.Show("Compilation Successful");
                    button3.Enabled = true;
                }
                else
                {
                    MessageBox.Show("Compilation Error\n");
                    MessageBox.Show(error);
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
           
        }

        private void button3_Click(object sender, EventArgs e)
        {
            //********************************
            button4.Enabled = true;

            Form1 ob = new Form1();
            TextWriter tw = new StreamWriter(@"E:\RE\UML.txt");
            
            TextReader tr = new StreamReader(@path);
            string s = tr.ReadToEnd();
            tr.Close();
            string[] par = new string[100];
            string[] par1 = new string[100];
            int ccount = 0;
            par = s.Split(' ', '\n', ';');
            for (int i = 0; i < par.Length; i++)
            {
                if (par[i] == "class")
                {
                    ccount++;
                    //Console.WriteLine(ccount.ToString() + par[i + 1]);
                    tw.WriteLine(ccount.ToString() + par[i+1]);
                }
            }

            

            ob.getAttributes("int", tw,path);
            ob.getAttributes("char", tw, path);
            ob.getAttributes("double", tw, path);
            ob.getAttributes("String", tw, path);
            ob.getAttributes("float", tw, path);
            ob.getAttributes("long", tw, path);
            ob.getAttributes("short", tw, path);
            ob.getAttributes("byte", tw, path);


            
            
            par = s.Split('\n');
            ccount = 0;
            for (int i = 0; i < par.Length; i++)
            {
                if (par[i].Contains("class"))
                    ccount++;

                if ((par[i].Contains("(") && par[i].Contains(")")) && par[i + 1].Contains("{"))
                    if (/*!(par[i].Contains("main")) && */!(par[i].Contains("for")) && !(par[i].Contains("if")) && !(par[i].Contains("while")) && !(par[i].Contains("catch")))
                    {
                        if (par[i].Contains("main"))
                            tw.WriteLine(ccount.ToString()+"main()");
                        //Console.WriteLine(ccount.ToString() + par[i]);
                        else
                        tw.WriteLine(ccount.ToString() + par[i]);
                    }
            }

            tw.Close();

            tr = new StreamReader(@"E:\RE\UML.txt");
            s = tr.ReadToEnd();
            tr.Close();
            par = s.Split('\n');

           tw = new StreamWriter(@"E:\RE\Text_UML.txt");            
            for (int j = 1; j <= ccount; j++)
            {
                for (int i = 0; i < par.Length; i++)
                {
                    if (par[i].StartsWith(j.ToString()))
                    {
                        par[i] = par[i].Remove(0, 1);
                        par[i] = par[i].Remove(par[i].Length-1, 1);
                        tw.WriteLine(par[i]);
                    }
                }
                tw.Write("#");
                
            }
           tw.Close();

            tr = new StreamReader(@"E:\RE\Text_UML.txt");
            s = tr.ReadToEnd();            
            tr.Close();
            par1 = s.Split('#');
            tw = new StreamWriter(@"E:\RE\UML.txt");
            int len = par1.Length;
            len--;
            for (int i = 0; i < len; i++)
            {
                tw.Write("CLASS : ");
                tw.WriteLine(par1[i]);
            }
            tw.Close();
            tr = new StreamReader(@"E:\RE\UML.txt");
            s = tr.ReadToEnd();
            tr.Close();
            txtUML.Text = s;
            
            //************************************
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Form2 f2 = new Form2();
            f2.Show();
            int line = 60;
            int ccount = 0;
            string[] par = new string[100];
            string[] par1 = new string[100];
            
            
            TextReader tr = new StreamReader(@"E:\RE\Text_UML.txt");
            string s = tr.ReadToEnd();
            tr.Close();

            par = s.Split('\n');
            for (int i = 0; i < par.Length; i++)
            {
                if (par[i].EndsWith("#"))
                    ccount++;
            }

            Pen myPen = new Pen(Color.Black);
            SolidBrush myBrush = new SolidBrush(Color.Wheat);
            SolidBrush drawBrush = new SolidBrush(Color.Black);
            Graphics formGraphics = f2.CreateGraphics();
            string drawString = "Sample Text";
            Font drawFont = new Font("Arial", 10,FontStyle.Bold);

            int x = 50;
            //MessageBox.Show(s);
            par = s.Split('#');
            int len=par.Length;
            len--;
            for (int j = 0; j < len; j++)
            {
                int v=0,m=0,t=0;
                int y = 50;
                //MessageBox.Show(par[j]);

               par1 = par[j].Split('\n');

               for (int i = 0; i < par1.Length; i++)
               {
                  
                       t++;
               }
               t--;
               
                for (int i = 0; i < par1.Length; i++)
                {
                    if (par1[i].Contains(':'))
                        v++;
                }
               
                for (int i = 0; i < par1.Length; i++)
                {      
                    if (par1[i].Contains('('))
                        m++;
                }
                //MessageBox.Show(t.ToString());
                //MessageBox.Show(v.ToString());
                //MessageBox.Show(m.ToString());
                if (m == 0)
                {
                    formGraphics.FillRectangle(myBrush, new Rectangle(x, y, 150, (t * 40)+20));
                    formGraphics.DrawRectangle(myPen, new Rectangle(x, y, 150, (t * 40)+20));
                    //y = y + 20;
                    formGraphics.DrawLine(myPen, x, y + 20, x + 150, y + 20);

                    
                }
                if (v == 0)
                {
                    formGraphics.FillRectangle(myBrush, new Rectangle(x, y, 150, t * 40));
                    formGraphics.DrawRectangle(myPen, new Rectangle(x, y, 150, t * 40));
                    //y = y + 20;
                    formGraphics.DrawLine(myPen, x, y + 30, x + 150, y + 30);
                }


                else
                {
                    formGraphics.FillRectangle(myBrush, new Rectangle(x, y, 150, t * 40));
                    formGraphics.DrawRectangle(myPen, new Rectangle(x, y, 150, t * 40));
                }
                


                for (int i = 0; i < t; i++)
                {

                    drawString = par1[i];
                    formGraphics.DrawString(drawString, drawFont, drawBrush, x + 20, y + 5);
                  
                    if(i==v && m==0)
                    {
                        y = y + 20;
                        formGraphics.DrawLine(myPen, x, y + 20, x + 150, y + 20);
                    }

                    if (i == 0 || i == v)
                    {
                        y = y + 20;
                        formGraphics.DrawLine(myPen, x, y + 20, x + 150, y + 20);
                    }
                    else
                    {
                        y = y + 20;
                    }
                    y = y + 20;
                }
                x += 200;
            }



            tr  = new StreamReader(@path);
           s = tr.ReadToEnd();
            tr.Close();
            par = new string[100];
            par1 = new string[100];

            

            par = s.Split('\n');
            len = par.Length;
            int classcount = 0;
            len--;
            for(int i=0;i<len;i++)
            {
                if (par[i].Contains("extends"))
                    classcount++;
      
            }

            //MessageBox.Show("extends is now "+classcount);
           
           //===============================================================
            int kk = 0;
            while (kk < classcount)
            {
                int flag = 0;
                int frm = 0;
                par = s.Split('\n', ';');
                len = par.Length;
                len--;

                for (int i = 0; i < len; i++)
                {
                    if (par[i].Contains("class"))
                    {
                        if (par[i].Contains("extends"))
                        {
                            frm++;
                            break;
                        }
                        frm++;

                    }
                }

                par1 = new string[100];
                par1 = s.Split(' ', '\n');
                string tostr = "hello";
                len = par1.Length;
                len--;

                for (int i = 0; i < len; i++)
                {
                    if (par1[i].Contains("extends"))
                    {
                        tostr = par1[i + 1];
                        break; 

                    }
                }

                //MessageBox.Show(tostr);

                par = s.Split('\n');
                len = par.Length;
                len--;
                int too = 0;

                for (int i = 0; i < len; i++)
                {
                    if (par[i].StartsWith("class"))
                    {
                        if (par[i].EndsWith(tostr))
                        {

                            too++;
                            break;
                        }
                        too++;
                    }

                }
                //MessageBox.Show("------from point" + frm.ToString());
               // MessageBox.Show("------too  point"+too.ToString());


                too *= 200;
                frm = (frm * 200) - 150; ;
                //MessageBox.Show("========from point" + frm.ToString());
                //MessageBox.Show("========too  point" + too.ToString());

                //formGraphics.DrawLine(myPen, too+5, line, frm, line);//to
                //===========================================================================
                            
                Pen greenPen = new Pen(Color.Black, 1);
                int dupline;
                Random r = new Random();
                dupline = r.Next(10, 40);
                //MessageBox.Show(rand.ToString());

                int dist = frm - too;
                int dif = dist / 6;
                if (dist == 50)
                    formGraphics.DrawLine(myPen, too + 5, line, frm, line);

                else
                {
                    //MessageBox.Show("dist " + dist.ToString());
                    //MessageBox.Show("diff " + dif.ToString());
                    Point point1 = new Point(frm, line);
                    frm = frm - dif;
                    dupline = 30;
                    Point point2 = new Point(frm, dupline);
                    frm = frm - dif;
                    Point point3 = new Point(frm, dupline);
                    frm = frm - dif;
                    Point point4 = new Point(frm, dupline);
                    frm = frm - dif;
                    Point point5 = new Point(frm, dupline);
                    frm = frm - dif;
                    Point point6 = new Point(frm, dupline);
                    frm = frm - dif;
                    Point point7 = new Point(too + 5, line);
                    Point[] curvePoints = { point1, point2, point3, point4, point5, point6, point7 };







                    // Draw curve to screen.
                    formGraphics.DrawCurve(greenPen, curvePoints);

                }



                //===========================================================================
                formGraphics.DrawLine(myPen, too, line, too+5, line-5);
                formGraphics.DrawLine(myPen, too, line, too+5, line+5);
                formGraphics.DrawLine(myPen, too+5, line-5, too+5, line+5);

                line += 5;
               // MessageBox.Show("yessssssssssssssssssssssssssssssssssss");

                TextWriter tw=new StreamWriter(@"E:\RE\copy.txt");
                par = s.Split('\n');
                len = par.Length;
                len--;
                for (int i = 0; i <= len; i++)
                {
                    if (par[i].Contains("extends") && flag==0)
                    {
                        tw.WriteLine("class");
                        flag = 1;
                        continue;
                        
                    }

                    tw.WriteLine(par[i]);
                }
                tw.Close();
                kk++;
                //MessageBox.Show("dddddddddddddddddddddddddddddddddddddddddddddddddddd");
                tr = new StreamReader(@"E:\RE\copy.txt");
                s = tr.ReadToEnd();
                tr.Close();

            }
            File.Delete(@"E:\RE\copy.txt");
            drawFont.Dispose();
            myPen.Dispose();
            myBrush.Dispose();
            formGraphics.Dispose();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            if (txtCode.Text == "")
            {
                MessageBox.Show("No code in Code box! Browse and select a source code.", "Info", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            else
            {
                DialogResult x = MessageBox.Show("Do you want to save the code as edited in above Text Box", "Save?", MessageBoxButtons.YesNo, MessageBoxIcon.Question, MessageBoxDefaultButton.Button1);
                if (x == DialogResult.Yes)
                {
                    string s = txtCode.Text;
                    TextWriter tw = new StreamWriter(@path);
                    tw.Write(s);
                    tw.Close();
                    MessageBox.Show("Code saved", "Info", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                else
                {
                    MessageBox.Show("Code not saved", "Info", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
            }
        }

        private void txtCode_TextChanged(object sender, EventArgs e)
        {
            if (txtpath.Text != "")
            {
                button5.Enabled = true;
            }
            else
            {
                button5.Enabled = false;
            }
        }
    }
}
