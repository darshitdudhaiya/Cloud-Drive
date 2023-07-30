import java.awt.*;
import javax.swing.*;  
import java.awt.event.*;
class frame extends JFrame implements ActionListener{
    
    JLabel l = new JLabel("Name");
	JTextField tf = new JTextField();
	JLabel l2 = new JLabel("Password");
	JTextField tf2 = new JTextField();
	JButton b = new JButton("Submit");
	JTextField textField = new JTextField();

    public frame() {
        setSize(600,600);
		setTitle("swing");
		setLayout(null);
		l.setBounds(100,50,100,50);
		add(l);
		tf.setBounds(100,100,200,30);
		add(tf);
		l2.setBounds(100,150,100,50);
		add(l2);
		tf2.setBounds(100,200,200,30);
		add(tf2);
		b.setBounds(100,260,100,30);
		add(b);
		b.addActionListener(this);
		textField.setBounds(400,150,200,50);
		add(textField);
		setVisible(true);
    }
	public void actionPerformed(ActionEvent e){
		String name = tf.getText();
		textField.setText(name);
	}
}
public class swing{
    public static void main(String[] args) {
       new frame();
    }
}