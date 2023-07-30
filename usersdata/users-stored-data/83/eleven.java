/* 11 Write a program to change background color as per mouse entered and exited the applet.
 */
import javax.swing.*;

import java.awt.Color;
import  java.awt.event.*;
import java.applet.*;
import java.awt.*;
// <applet code ="eleven" width="500" height="500"></applet>
public class eleven extends Applet implements MouseListener{
    public void init()
    {
        setBackground(Color.WHITE);
        addMouseListener(this);
    }
    public void mousePressed(MouseEvent e)
    {

    }
    public void mouseEntered(MouseEvent e)
    {
        setBackground(Color.RED);
    }
    public void mouseExited(MouseEvent e)
    {
        setBackground(Color.BLACK);
    }
    public void mouseClicked(MouseEvent e)
    {
        
    }
    public void mouseReleased(MouseEvent e)
    {
        
    }
}


