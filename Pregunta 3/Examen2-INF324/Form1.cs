using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace Examen2_INF324
{
    public partial class Form1 : Form
    {

        Bitmap bmp;
        int x, y;
        int mR, mG, mB;
        int cont = 0;

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Todos|*.*|Archivos JPEG|*.jpg|Archivos GIF|*.gif";
            openFileDialog1.FileName = "";
            if (openFileDialog1.ShowDialog() == DialogResult.OK)
            {
                bmp = new Bitmap(openFileDialog1.FileName);
                pictureBox1.Image = bmp;
                cont = 0;
                ELIMINAR();
                TEXTURA();
            }
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            if (pictureBox1.Image == null)
            {
                MessageBox.Show("Debe Cargar una Imagen!!.", "ERROR", MessageBoxButtons.OK);
            }
            else
            {
                x = e.X;
                y = e.Y;
                textBox5.Text = x.ToString();
                textBox4.Text = y.ToString();


                Color c = new Color();
                c = bmp.GetPixel(x, y);
                mR = 0;
                mG = 0;
                mB = 0;

                for (int i = x; i < x + 10; i++)
                {
                    for (int j = y; j < y + 10; j++)
                    {
                        c = bmp.GetPixel(i, j);
                        mR = mR + c.R;
                        mG = mG + c.G;
                        mB = mB + c.B;
                    }
                }
                mR = mR / 100;
                mG = mG / 100;
                mB = mB / 100;
                textBox1.Text = c.R.ToString();
                textBox2.Text = c.G.ToString();
                textBox3.Text = c.B.ToString();

                if (cont < 3)
                {
                    INSERT("Textu" + cont, c.R.ToString(), c.G.ToString(), c.B.ToString());
                    cont++;
                    TEXTURA();
                }
            }
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void groupBox2_Enter(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            if (pictureBox1.Image == null)
            {
                MessageBox.Show("Debe Cargar una Imagen!!.", "ERROR", MessageBoxButtons.OK);
            }
            else
            {
                int mRn = 0, mGn = 0, mBn = 0;
                Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
                Color c = new Color();
                for (int i = 0; i < bmp.Width - 10; i = i + 10)
                    for (int j = 0; j < bmp.Height - 10; j = j + 10)
                    {

                        for (int i2 = i; i2 < i + 10; i2++)
                            for (int j2 = j; j2 < j + 10; j2++)
                            {
                                c = bmp.GetPixel(i2, j2);
                                mRn = mRn + c.R;
                                mGn = mGn + c.G;
                                mBn = mBn + c.B;
                            }
                        mRn = mRn / 100;
                        mGn = mGn / 100;
                        mBn = mBn / 100;

                        if (((mR - 10 <= mRn) && (mRn <= mR + 10)) &&
                            ((mG - 10 <= mGn) && (mGn <= mG + 10)) &&
                            ((mB - 10 <= mBn) && (mBn <= mB + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Gold);
                                }
                        }
                        else
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    c = bmp.GetPixel(i2, j2);
                                    bmp2.SetPixel(i2, j2, Color.FromArgb(c.R, c.G, c.B));
                                }
                        }


                    }
                pictureBox1.Image = bmp2;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if (pictureBox1.Image == null)
            {
                MessageBox.Show("Debe Cargar una Imagen!!.", "ERROR", MessageBoxButtons.OK);
            }
            else
            {
                int mRn = 0, mGn = 0, mBn = 0;
                Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
                Color c = new Color();
                for (int i = 0; i < bmp.Width - 10; i = i + 10)
                    for (int j = 0; j < bmp.Height - 10; j = j + 10)
                    {

                        for (int i2 = i; i2 < i + 10; i2++)
                            for (int j2 = j; j2 < j + 10; j2++)
                            {
                                c = bmp.GetPixel(i2, j2);
                                mRn = mRn + c.R;
                                mGn = mGn + c.G;
                                mBn = mBn + c.B;
                            }
                        mRn = mRn / 100;
                        mGn = mGn / 100;
                        mBn = mBn / 100;

                        if (((mR - 10 <= mRn) && (mRn <= mR + 10)) &&
                            ((mG - 10 <= mGn) && (mGn <= mG + 10)) &&
                            ((mB - 10 <= mBn) && (mBn <= mB + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Turquoise);
                                }
                        }
                        else
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    c = bmp.GetPixel(i2, j2);
                                    bmp2.SetPixel(i2, j2, Color.FromArgb(c.R, c.G, c.B));
                                }
                        }


                    }
                pictureBox1.Image = bmp2;
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            if (pictureBox1.Image == null)
            {
                MessageBox.Show("Debe Cargar una Imagen!!.", "ERROR", MessageBoxButtons.OK);
            }
            else
            {
                int mRn = 0, mGn = 0, mBn = 0;
                Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
                Color c = new Color();
                for (int i = 0; i < bmp.Width - 10; i = i + 10)
                    for (int j = 0; j < bmp.Height - 10; j = j + 10)
                    {

                        for (int i2 = i; i2 < i + 10; i2++)
                            for (int j2 = j; j2 < j + 10; j2++)
                            {
                                c = bmp.GetPixel(i2, j2);
                                mRn = mRn + c.R;
                                mGn = mGn + c.G;
                                mBn = mBn + c.B;
                            }
                        mRn = mRn / 100;
                        mGn = mGn / 100;
                        mBn = mBn / 100;

                        if (((mR - 10 <= mRn) && (mRn <= mR + 10)) &&
                            ((mG - 10 <= mGn) && (mGn <= mG + 10)) &&
                            ((mB - 10 <= mBn) && (mBn <= mB + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Crimson);
                                }
                        }
                        else
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    c = bmp.GetPixel(i2, j2);
                                    bmp2.SetPixel(i2, j2, Color.FromArgb(c.R, c.G, c.B));
                                }
                        }


                    }
                pictureBox1.Image = bmp2;
            }
        }
        public void TEXTURA()
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local);database=ImgTextura;user=examen324;pwd=123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "SELECT * FROM textura";
            ada.SelectCommand.CommandType = CommandType.Text;
            DataTable dt = new DataTable();
            ada.Fill(dt);
            dataGridView1.DataSource = dt;
            dataGridView1.AutoResizeColumns();
            dataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.AllCells;
        }
        public void ELIMINAR()
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local);database=ImgTextura;user=examen324;pwd=123456";
            SqlCommand cmd = new SqlCommand();
            cmd.CommandText = "DELETE FROM textura";
            cmd.CommandType = CommandType.Text;
            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
        }

        public void INSERT(string idTextura, string cR, string cG, string cB)
        {

            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local);database=ImgTextura;user=examen324;pwd=123456";
            SqlCommand cmd = new SqlCommand();
            cmd.CommandText = string.Format("INSERT INTO textura values ('{0}','{1}','{2}','{3}')", idTextura, cR, cG, cB);
            cmd.CommandType = CommandType.Text;
            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
        }


        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void button6_Click(object sender, EventArgs e)
        {
            cont = 0;
            ELIMINAR();
            TEXTURA();
            if(pictureBox1.Image != null)
            {
                pictureBox1.Image = bmp;
            }
        }

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if(cont == 3)
            {
                int cPos = 0;
                int[] ccR = new int[3];
                int[] ccG = new int[3];
                int[] ccB = new int[3];

                foreach(DataGridViewRow row in dataGridView1.Rows)
                {
                    if (row.Cells[0].Value != null)
                    {
                        ccR[cPos] = Int32.Parse(row.Cells["cR"].Value.ToString());
                        ccG[cPos] = Int32.Parse(row.Cells["cG"].Value.ToString());
                        ccB[cPos] = Int32.Parse(row.Cells["cB"].Value.ToString());
                        cPos++;
                    }
                }
                
                int mRn = 0, mGn = 0, mBn = 0;
                Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
                Color c = new Color();
                for (int i = 0; i < bmp.Width - 10; i = i + 10)
                    for (int j = 0; j < bmp.Height - 10; j = j + 10)
                    {
                        for (int i2 = i; i2 < i + 10; i2++)
                            for (int j2 = j; j2 < j + 10; j2++)
                            {
                                c = bmp.GetPixel(i2, j2);
                                mRn = mRn + c.R;
                                mGn = mGn + c.G;
                                mBn = mBn + c.B;
                            }
                        mRn = mRn / 100;
                        mGn = mGn / 100;
                        mBn = mBn / 100;

                        if (((ccR[0] - 10 <= mRn) && (mRn <= ccR[0] + 10)) &&
                            ((ccG[0] - 10 <= mGn) && (mGn <= ccG[0] + 10)) &&
                            ((ccB[0] - 10 <= mBn) && (mBn <= ccB[0] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Gold);
                                }
                        }
                        else if (((ccR[1] - 10 <= mRn) && (mRn <= ccR[1] + 10)) &&
                            ((ccG[1] - 10 <= mGn) && (mGn <= ccG[1] + 10)) &&
                            ((ccB[1] - 10 <= mBn) && (mBn <= ccB[1] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Turquoise);
                                }
                        }
                        else if (((ccR[2] - 10 <= mRn) && (mRn <= ccR[2] + 10)) &&
                            ((ccG[2] - 10 <= mGn) && (mGn <= ccG[2] + 10)) &&
                            ((ccB[2] - 10 <= mBn) && (mBn <= ccB[2] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Crimson);
                                }
                        }
                        else
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    c = bmp.GetPixel(i2, j2);
                                    bmp2.SetPixel(i2, j2, Color.FromArgb(c.R, c.G, c.B));
                                }
                        }


                    }
                pictureBox1.Image = bmp2;
            }
            else
            {
                MessageBox.Show("Tiene que insertar 3 texturas!!", "ERROR", MessageBoxButtons.OK);
            }
        }
    }
}
