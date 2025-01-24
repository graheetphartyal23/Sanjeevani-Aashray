import java.util.Scanner;
public class crc {
    // Function to perform XOR operation
    private static String xor(String a, String b) {
        StringBuilder result = new StringBuilder();
        for (int i = 1; i < b.length(); i++) {
            result.append(a.charAt(i) == b.charAt(i) ? '0' : '1');
        }
        return result.toString();
    }
    // Function to perform the CRC division
    private static String divide(String dividend, String divisor) {
        int divisorLength = divisor.length();
        String temp = dividend.substring(0, divisorLength);
        while (divisorLength < dividend.length()) {
            if (temp.charAt(0) == '1') {
                temp = xor(divisor, temp) + dividend.charAt(divisorLength);
            } else {
                temp = xor("0".repeat(divisorLength), temp) + dividend.charAt(divisorLength);
            }
            divisorLength += 1;
        }
        if (temp.charAt(0) == '1') {
            temp = xor(divisor, temp);
        } else {
            temp = xor("0".repeat(divisorLength), temp);
        }
        return temp;
    }
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter the data bits: ");
        String data = scanner.nextLine();
        System.out.print("Enter the generator bits: ");
        String generator = scanner.nextLine();
        // Append zeros at the end of the data
        int generatorLength = generator.length();
        String appendedData = data + "0".repeat(generatorLength - 1);
        // Get the remainder (CRC code)
        String crc = divide(appendedData, generator);
        // Append CRC code to the original data
        String transmittedData = data + crc;
        System.out.println("CRC Code: " + crc);
        System.out.println("Transmitted Data (Data + CRC): " + transmittedData);
        // Verification at receiver end
        System.out.print("Enter received data bits: ");
        String receivedData = scanner.nextLine();
        String remainder = divide(receivedData, generator);
        if (remainder.equals("0".repeat(generatorLength - 1))) {
            System.out.println("No error detected in received data.");
        } else {
            System.out.println("Error detected in received data.");

        }
        scanner.close();
    }
}