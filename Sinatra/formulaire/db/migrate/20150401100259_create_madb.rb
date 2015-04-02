class CreateMadb < ActiveRecord::Migration
  def change
  	create_table :to_do do |t|
  		t.string :nom
  		t.string :prenom
  		t.string :age
  		t.string :ville
  end
end
