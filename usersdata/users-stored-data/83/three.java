// 3. Write a program to get id and password, list hobbies and drop down 3 subjects.

import java.applet.*;
import java.awt.event.*;
import javax.swing.*;
/*<applet code="three" width="700" height="500"></applet> */
public class three extends JApplet implements ActionListener{
    JLabel lb1 = new JLabel("Id");
   JTextField jtf1 = new JTextField();
    JLabel lb2 = new JLabel("Password");
    JPasswordField jpf1 = new JPasswordField();
    JTextArea jta1 = new JTextArea();
    String hobbies[] ={"Swimming","Video Editing","Drawing"};
    JList<String> jl1 = new JList<>(hobbies);   
    String subjects[] = {"C#","JAVA","OS"};
    JComboBox <String> jcb1 = new JComboBox<>(subjects);
    JButton jb1= new JButton("Click me");

    public void init()
    {
        setLayout(null);
        lb1.setBounds(100,0,80,30);
        add(lb1);
        jtf1.setBounds(100, 30, 100, 20);
        add(jtf1);

        lb2.setBounds(100,50,80,30);
        add(lb2);
        jpf1.setBounds(100, 100, 100, 20);
        add(jpf1);

        jta1.setBounds(100,150,100,90);
        add(jta1);

        jl1.setBounds(100, 250, 90, 80);
        add(jl1);

        jcb1.setBounds(100,350,120,30);
        add(jcb1);

        jb1.setBounds(100,400,100,30);
        add(jb1);
        jb1.addActionListener(this);
    }

    public void actionPerformed(ActionEvent e){
        jta1.setText(jtf1.getText() + "\n");
        jta1.append(jpf1.getText());


    }

}
