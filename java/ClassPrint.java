public class ClassPrint {
	
	private String internalString;
	
	private String getString() {
		return internalString;
	}
	
	private void setString(String inputString) {
		internalString = inputString;
	}

	public static void main(String[] args) {
		ClassPrint outputString = new ClassPrint();
		for(int i = 0; i < args.length; i++) {
			outputString.setString(args[i]);
			System.out.println(outputString.getString());
		}
	}

}
