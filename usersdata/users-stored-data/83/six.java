// 6	Write a program to display 16 buttons using GridLayout.
import java.applet.*;
import javax.swing.*;
import java.awt.*;
// <applet code = "six" width="700" height="500"></applet>
public class six extends JApplet{
  
    public void init()
    {
        JButton b1 = new JButton("1");
        JButton b2 = new JButton("2");
        JButton b3 = new JButton("3");
        JButton b4 = new JButton("4");
        JButton b5 = new JButton("5");
        JButton b6 = new JButton("6");
        JButton b7 = new JButton("7");
        JButton b8 = new JButton("8");
        JButton b9 = new JButton("9");
        JButton b10 = new JButton("10");
        JButton b11 = new JButton("11");
        JButton b12 = new JButton("12");
        JButton b13 = new JButton("13");
        JButton b14 = new JButton("14");
        JButton b15 = new JButton("15");
        JButton b16 = new JButton("16");
    
    
        GridBagLayout gl = new GridBagLayout();
        setLayout(gl);

        GridBagConstraints gbc = new GridBagConstraints();
        gbc.fill=GridBagConstraints.HORIZONTAL;

        gbc.gridx=0;
        gbc.gridy=0;
        add(b1,gbc);
     
        gbc.gridx=1;
        gbc.gridy=0;
        add(b2,gbc);
     
        gbc.gridx=2;
        gbc.gridy=0;
        add(b3,gbc);
     
        gbc.gridx=3;
        gbc.gridy=0;
        add(b4,gbc);
     
        gbc.gridx=0;
        gbc.gridy=1;
        add(b5,gbc);
     
        gbc.gridx=1;
        gbc.gridy=1;
        add(b6,gbc);
     
        gbc.gridx=2;
        gbc.gridy=1;
        add(b7,gbc);
     
        gbc.gridx=3;
        gbc.gridy=1;
        add(b8,gbc);
        
        gbc.gridx=0;
        gbc.gridy=2;
        add(b9,gbc);
     
        gbc.gridx=1;
        gbc.gridy=2;
        add(b10,gbc);
     
        gbc.gridx=2;
        gbc.gridy=2;
        add(b11,gbc);
     
        gbc.gridx=3;
        gbc.gridy=2;
        add(b12,gbc);
     
        gbc.gridx=0;
        gbc.gridy=3;
        add(b13,gbc);
     
        gbc.gridx=1;
        gbc.gridy=3;
        add(b14,gbc);
        
        gbc.gridx=2;
        gbc.gridy=3;
        add(b15,gbc);
     
        gbc.gridx=3;
        gbc.gridy=3;
        add(b16,gbc);
     
        
    }
}
