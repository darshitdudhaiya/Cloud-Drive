import java.applet.*;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

import javafx.scene.text.Text;


//<applet code="form.java" height="800" width="800"></applet>

public class form extends JApplet implements ActionListener{
    JLabel l = new JLabel("Name");
    JTextField tfname = new JTextField();
    JLabel l1 = new JLabel("Address");
    JTextField tfaddress = new JTextField();
    JLabel l2 = new JLabel("City");
    JTextField tfcity = new JTextField();
    JLabel l3 = new JLabel("Gender");
    JRadioButton rdbmale = new JRadioButton("Male");
    JRadioButton rdbfemale = new JRadioButton("Female");
    JLabel l4 = new JLabel("Hobbies");

    String course[]={"Singing","Dancing","Running"};
    JComboBox cmb = new JComboBox<>(course);

    JFrame frm = new JFrame("myframe");
    JTextArea ta = new JTextArea();

    JButton btn = new JButton("Submit");

    public void init(){

     

        setLayout(null);

        l.setBounds(20,75,100,35);
        add(l);
        tfname.setBounds(90,75,110,25);
        add(tfname);
        l1.setBounds(20,120,100,35);
        add(l1);
        tfaddress.setBounds(90,125,110,25);
        add(tfaddress);
        l2.setBounds(20,165,100,35);
        add(l2);
        tfcity.setBounds(90,170,110,25);
        add(tfcity);

        ButtonGroup bg = new ButtonGroup();
        bg.add(rdbmale);
        bg.add(rdbfemale);
        l3.setBounds(20,195,100,35);
        add(l3);
        rdbmale.setBounds(85,200,70,30);
        add(rdbmale);
        rdbfemale.setBounds(155,200,70,30);
        add(rdbfemale);

        l4.setBounds(20,235,100,35);
        add(l4);
        cmb.setBounds(90,240,100,25);
        add(cmb);

        btn.setBounds(20,300,100,25);
        btn.addActionListener(this);
        add(btn);

        frm.setSize(400,400);
        ta.setBounds(20,50,400,400);
        frm.add(ta);

    }

    public void actionPerformed(ActionEvent e){
        String g;
        if(rdbmale.isSelected()){
            g=rdbmale.getText();
        }
        else{
            g=rdbfemale.getText();
        }
        frm.show();
        ta.append("\n"+tfname.getText()+"\n"+tfaddress.getText()+"\n"+tfcity.getText()+"\n"+g+"\n"+cmb.getSelectedItem()+"\n");
    }

}