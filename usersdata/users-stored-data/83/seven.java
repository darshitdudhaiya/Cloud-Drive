// 7	Write a program to display 7 panels with different color using CardLayout.

import java.applet.*;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

// <Applet code="seven" width="700" height="500"></Applet>
public class seven extends JApplet implements MouseListener{
    JPanel p = new JPanel();
    JPanel p1 = new JPanel();
    JPanel p2 = new JPanel();
    JPanel p3 = new JPanel();
    JPanel p4 = new JPanel();
    JPanel p5 = new JPanel();
    JPanel p6 = new JPanel();
    JPanel p7 = new JPanel();
    CardLayout cl = new CardLayout();

    public void init()
    {
        p.setLayout(cl);
        p1.setBackground(Color.RED);
        p.add("p1",p1);

        p2.setBackground(Color.YELLOW);
        p.add("p2",p2);

        p3.setBackground(Color.BLUE);
        p.add("p3",p3);

        p4.setBackground(Color.GREEN);
        p.add("p4",p4);

        p5.setBackground(Color.PINK);
        p.add("p5",p5);

        p6.setBackground(Color.GRAY);
        p.add("p6",p6);

        p7.setBackground(Color.BLACK);
        p.add("p7",p7);


        setLayout(new BorderLayout());
        add("Center",p);
        p.addMouseListener(this);
    }
   
    public void mouseClicked(MouseEvent e)
    {
        cl.next(p);
    }
    public void mousePressed(MouseEvent e){

    }
    public void mouseEntered(MouseEvent e){

    }
    public void mouseReleased(MouseEvent e){

    }
    public void mouseExited(MouseEvent e){

    }
    public static void main(String[] args) {
        new seven();
    }
}