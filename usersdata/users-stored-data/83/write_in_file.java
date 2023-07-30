import java.io.File;
import java.io.FileWriter;

public class write_in_file {
    public static void main(String[] args) {
        try {
            FileWriter fileWriter = new FileWriter("D:demo1.txt");
            fileWriter.write("Hello I am Ironman from Marval.............");
            fileWriter.write("Hello I am Thor from Marval.............");
            fileWriter.write("Hello I am Doctor-Strange from Marval.............");
            fileWriter.write("Hello I am Captain America from Marval.............");
            fileWriter.write("And I am Creater of the Marval.............");
            fileWriter.close();
            System.out.println("Contant is written successfully!!!");
        } catch (Exception e) {

        }
    }
}
